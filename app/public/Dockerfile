# Use official WordPress image with PHP + Apache
FROM wordpress:php8.2-apache

# Install mysqli (needed for MySQL database connection)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your WordPress files into the container
COPY . /var/www/html
