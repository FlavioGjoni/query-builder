FROM php:5.6-fpm-alpine

# Container/Linux dependencies
RUN apk add --update --no-cache nano bash

# PHP dependencies
RUN docker-php-ext-install pdo pdo_mysql mysqli mbstring

# PHP composer
COPY --from=composer:2.2 /usr/bin/composer /usr/local/bin/composer