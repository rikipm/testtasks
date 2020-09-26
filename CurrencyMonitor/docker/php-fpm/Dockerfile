FROM php:7.2-fpm

RUN apt-get update \
    && pecl install xdebug-2.7.1 \

ADD ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www