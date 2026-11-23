FROM node:24-bookworm-slim AS node
FROM composer:2 AS composer

FROM php:8.5-cli-bookworm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libpq-dev \
        libzip-dev \
        libicu-dev \
    && docker-php-ext-install -j"$(nproc)" pdo_pgsql zip intl bcmath pcntl \
    && rm -rf /var/lib/apt/lists/*

COPY --from=node /usr/local/bin/node /usr/local/bin/node
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=composer /usr/bin/composer /usr/local/bin/composer

ENV COMPOSER_HOME=/opt/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="/opt/composer/vendor/bin:${PATH}"

RUN ln -s ../lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm \
    && ln -s ../lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx \
    && composer global require --no-interaction --no-progress \
        laravel/installer laravel/pint \
    && composer clear-cache

COPY php.ini /usr/local/etc/php/conf.d/clases.ini

WORKDIR /workspace

CMD ["sleep", "infinity"]
