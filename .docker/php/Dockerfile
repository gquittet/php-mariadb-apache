FROM php:7.2.10-apache
RUN apt-get update -y

COPY . /var/www/html

# Copy Apache vhosts configuration
COPY ./.docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

# Add correct rights for www folder.
RUN chown -R www-data:www-data /var/www/

# Set the timezone
COPY ./.docker/php/timezone.ini /usr/local/etc/php/conf.d/timezone.ini

# Install and enable xdebug.
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./.docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html

EXPOSE 80 443
