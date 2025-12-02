FROM php:8.4-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring curl xml
EXPOSE 80