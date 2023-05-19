# Use the official PHP 8.2.4 image as the base image
FROM php:8.2.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy the CodeIgniter project files to the container
COPY . /var/www/html

# Set the appropriate permissions for Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www/html/writable

# Expose port 80
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]