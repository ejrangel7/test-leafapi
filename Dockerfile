FROM php:8.1.2-apache

COPY apache2.conf /etc/apache2

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
