FROM php:7.0-apache-jessie

RUN apt-get update && apt-get install -y npm && docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

RUN echo 'date.timezone = "UTC"' > /usr/local/etc/php/conf.d/timezone.ini
