ARG PHP_EXTENSIONS='apcu curl pdo_mysql zip readline opcache mbstring xml'
FROM php:7.4-apache

RUN apt-get update && apt-get install -y libz-dev git

RUN pecl install grpc \
    && docker-php-ext-enable grpc

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y unzip libcurl4-openssl-dev libzip-dev libedit-dev libxml2-dev libonig-dev
RUN docker-php-ext-configure zip && docker-php-ext-install zip
RUN docker-php-ext-configure curl && docker-php-ext-install curl
RUN docker-php-ext-configure readline && docker-php-ext-install readline
RUN docker-php-ext-configure xml && docker-php-ext-install xml
RUN docker-php-ext-configure mbstring && docker-php-ext-install mbstring
RUN docker-php-ext-configure json && docker-php-ext-install json