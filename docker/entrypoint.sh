set -e

./docker/wait-for-it.sh db

if [ ! -d vendor ]; then
    composer install --no-interaction
fi

if [ ! -f .env ]; then
    cp .env.example .env
fi

php artisan key:generate --no-interaction

php artisan migrate --force

php-fpm