FROM php:7.2.10-apache
RUN apt-get update -y

COPY . /var/www/html

# Copy Apache vhosts configuration
COPY ./.docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

# Add correct rights for www folder.
RUN chown -R www-data:www-data /var/www/

# Install and enable xdebug.
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN cat ./.docker/php/xdebug.ini >> /usr/local/etc/php/php.ini
