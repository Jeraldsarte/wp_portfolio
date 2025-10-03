FROM wordpress:php8.2-apache

# Install mysqli extension for MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy WordPress files into the container
COPY app/public/ /var/www/html/
