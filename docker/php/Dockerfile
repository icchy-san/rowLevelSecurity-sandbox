FROM php:7.4.0-fpm

RUN apt-get update \
    && apt-get update \
    && apt-get -y install git unzip zlib1g-dev libpq-dev libonig-dev

RUN docker-php-ext-install pdo pdo_pgsql

# composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
