#!/bin/sh
set -e

# 1. Configure dynamic listening port from Render environment
PORT=${PORT:-8080}
echo "Configuring Nginx to listen on port: $PORT"
sed -i "s/listen [0-9]*;/listen $PORT;/g" /etc/nginx/http.d/default.conf 2>/dev/null || sed -i "s/listen [0-9]*;/listen $PORT;/g" /etc/nginx/conf.d/default.conf 2>/dev/null

# 2. Ensure SQLite database exists and is writable
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

# 3. Ensure permissions on storage and database
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod 664 /var/www/html/database/database.sqlite

# 4. Run database migrations gracefully
if [ -n "$APP_KEY" ]; then
    echo "Running database migrations..."
    php artisan migrate --force --graceful || true
    
    echo "Caching Laravel configuration & routes..."
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# 5. Launch Supervisord (PHP-FPM + Nginx)
echo "Starting Nginx and PHP-FPM via Supervisord..."
exec /usr/bin/supervisord -c /etc/supervisord.conf
