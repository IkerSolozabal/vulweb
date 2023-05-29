FROM php:7.4-apache

COPY ./html/ /var/www/html

RUN chmod -R 777 /var/www/html   # Para cambiar los permisos de los directorios
RUN chmod -R 777 /var/www/html/*  # Para cambiar los permisos de los archivos

RUN docker-php-ext-install mysqli
