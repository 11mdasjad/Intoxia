<?php

// Vercel serverless entrypoint for Laravel 13

// Create required storage directories in serverless /tmp writable partition
$storagePaths = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
];

foreach ($storagePaths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// Copy sqlite database to /tmp if using sqlite
$sourceDb = __DIR__ . '/../database/database.sqlite';
$targetDb = '/tmp/database.sqlite';

if (file_exists($sourceDb) && !file_exists($targetDb)) {
    copy($sourceDb, $targetDb);
}

if (!file_exists($targetDb)) {
    touch($targetDb);
}

putenv("DB_DATABASE={$targetDb}");
$_ENV['DB_DATABASE'] = $targetDb;

putenv('APP_STORAGE=/tmp/storage');
$_ENV['APP_STORAGE'] = '/tmp/storage';

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// Forward to public/index.php
require __DIR__ . '/../public/index.php';
