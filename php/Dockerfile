FROM php:7.4-fpm
COPY php.ini /usr/local/etc/php/

RUN docker-php-ext-install pdo_mysql
RUN apt-get update
RUN apt-get install vim -y
