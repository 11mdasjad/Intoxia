<?php

// Vercel Serverless Function Bridge for Laravel 13

// 1. Prepare writable serverless storage in /tmp
$storageDirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// 2. Setup SQLite database in writable /tmp
$sourceDb = __DIR__ . '/../database/database.sqlite';
$targetDb = '/tmp/database.sqlite';

if (file_exists($sourceDb) && (!file_exists($targetDb) || filesize($targetDb) === 0)) {
    @copy($sourceDb, $targetDb);
}

if (!file_exists($targetDb)) {
    @touch($targetDb);
}

// 3. Set runtime environment variables
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE={$targetDb}");
putenv("APP_STORAGE=/tmp/storage");
putenv("VIEW_COMPILED_PATH=/tmp/storage/framework/views");
putenv("CACHE_STORE=array");
putenv("SESSION_DRIVER=cookie");

$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $targetDb;
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';

// 4. Delegate request to public/index.php
require __DIR__ . '/../public/index.php';
