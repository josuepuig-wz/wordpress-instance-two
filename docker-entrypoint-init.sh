#!/bin/bash

if [ ! -f /var/www/html/wp-config.php ]; then
    echo "Downloading WordPress..."
    curl -o wordpress.tar.gz https://wordpress.org/latest.tar.gz
    tar -xvzf wordpress.tar.gz --strip-components=1 -C /var/www/html
    rm wordpress.tar.gz
    chown -R www-data:www-data /var/www/html
else
    echo "WordPress already installed."
fi

