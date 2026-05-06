set -e

cd /var/www/html

if [ ! -d vendor ]; then
    composer install --no-interaction
fi

if [ ! -f .env ]; then
    cp .env.example .env
fi

if ! grep -q "^APP_KEY=" .env || [ -z "$(grep '^APP_KEY=.\+' .env)" ]; then
    php artisan key:generate --no-interaction
fi

php artisan migrate --force

php-fpm