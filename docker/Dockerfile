FROM php:7.0-apache-jessie

RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -

RUN apt-get update && apt-get install -y nodejs && docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

RUN echo 'date.timezone = "UTC"' > /usr/local/etc/php/conf.d/timezone.ini
