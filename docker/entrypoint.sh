#!/bin/sh
set -e

# 1. Configure dynamic listening port from Render environment
PORT=${PORT:-8080}
echo "Configuring Nginx to listen on port: $PORT"
sed -i "s/listen [0-9]*;/listen $PORT;/g" /etc/nginx/http.d/default.conf 2>/dev/null || sed -i "s/listen [0-9]*;/listen $PORT;/g" /etc/nginx/conf.d/default.conf 2>/dev/null

# 2. Ensure environment defaults are set if not provided by host
export APP_NAME="${APP_NAME:-Intoxia}"
export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export APP_URL="${APP_URL:-https://intoxia.onrender.com}"
export APP_KEY="${APP_KEY:-base64:adCre9IwcoAiTwZIXu5n4PC8fYQvaJq14k45RSbRb2s=}"
export DB_CONNECTION="${DB_CONNECTION:-sqlite}"
export DB_DATABASE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
export SESSION_DRIVER="${SESSION_DRIVER:-file}"
export CACHE_STORE="${CACHE_STORE:-file}"
export QUEUE_CONNECTION="${QUEUE_CONNECTION:-sync}"
export LOG_CHANNEL="${LOG_CHANNEL:-stack}"
export LOG_STACK="${LOG_STACK:-single,stderr}"

# 3. Ensure required storage directories and SQLite database exist
mkdir -p /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/cache/data \
         /var/www/html/storage/logs \
         /var/www/html/storage/app/public \
         /var/www/html/database

if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# 4. Set directory permissions for web server user (www-data)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod 666 /var/www/html/database/database.sqlite 2>/dev/null || true

# 5. Discover packages & create storage symlink
php artisan package:discover --ansi || true
php artisan storage:link || true

# 6. Run database migrations & seed admin credentials unconditionally
echo "Running database migrations..."
php artisan migrate --force --graceful || php artisan migrate --force || true

echo "Ensuring Admin user credentials exist..."
php artisan db:seed --class=AdminUserSeeder --force || true

# 7. Optimize & Cache Laravel components
echo "Caching Laravel configuration, routes & views..."
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# 8. Launch Supervisord (PHP-FPM + Nginx)
echo "Starting Nginx and PHP-FPM via Supervisord..."
exec /usr/bin/supervisord -c /etc/supervisord.conf
