FROM php:7.4-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable pdo_mysql

ADD ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www