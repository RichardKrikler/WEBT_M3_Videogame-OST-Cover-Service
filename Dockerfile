FROM php:7.4.24-apache
RUN docker-php-ext-install pdo_mysql


# docker build -t php-apache_pdo .