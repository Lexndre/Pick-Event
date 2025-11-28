# ─────────────────────────
# 1 — Builder (Composer)
# ─────────────────────────
FROM composer:2 AS vendor

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ─────────────────────────
# 2 — Application
# ─────────────────────────
FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip unzip \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

WORKDIR /var/www/html

COPY . .
COPY --from=vendor /app/vendor ./vendor

# Autorisations
RUN chown -R www-data:www-data storage bootstrap/cache

# Laravel Key
RUN php artisan key:generate

CMD ["php-fpm"]
