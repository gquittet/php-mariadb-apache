FROM php:7.2.10-apache
RUN apt-get update -y && \
    apt-get upgrade -y
COPY . /var/www/html
COPY ./.docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
