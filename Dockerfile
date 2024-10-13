# Use the official PHP 7.4 Apache image as the base
FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite for WordPress
RUN a2enmod rewrite

# Set up the working directory
WORKDIR /var/www/html

