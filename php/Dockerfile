FROM php:8.1-fpm-alpine
WORKDIR /var/www/hexide-project/
RUN chown -R 775 /var/www/hexide-project/
RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
