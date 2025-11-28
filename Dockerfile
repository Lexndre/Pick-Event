# ─────────────────────────
# 1 — Builder (Composer)
# ─────────────────────────
FROM composer:2 AS vendor

WORKDIR /app

# On copie uniquement ce qui est nécessaire pour installer les dépendances
COPY composer.json composer.lock ./

# IMPORTANT : pas d'artisan à ce stade → on désactive les scripts Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# ─────────────────────────
# 2 — Application (PHP-FPM)
# ─────────────────────────
FROM php:8.2-fpm

# Extensions nécessaires (dont PostgreSQL)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip unzip \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

WORKDIR /var/www/html

# On copie tout le projet Laravel (y compris artisan)
COPY . .

# On copie les dépendances générées dans le stage "vendor"
COPY --from=vendor /app/vendor ./vendor

# Droits pour Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# ⚠️ OPTIONNEL : éviter de générer la clé en DUR au build
# Tu peux laisser ça pour le runtime (docker-compose exec) :
# RUN php artisan key:generate

CMD ["php-fpm"]
