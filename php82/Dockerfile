FROM php:8.2-fpm
RUN apt-get update -y
RUN apt-get -y install gcc make autoconf libc-dev pkg-config libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo pdo_mysql