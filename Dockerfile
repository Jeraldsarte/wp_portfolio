FROM wordpress:php8.2-apache

# Copy wp-config.php
COPY app/public/wp-config.php /var/www/html/wp-config.php

# Copy your themes, plugins, uploads
COPY app/public/wp-content/ /var/www/html/wp-content/
