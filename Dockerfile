FROM php:7.0-apache

COPY *.php /var/www/html/
COPY images /var/images

ENV DIRECTORY /var/images
