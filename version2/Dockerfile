# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the HTML and PHP files to the Apache document root
COPY index.html /var/www/html/
COPY login.php /var/www/html/

# Expose port 80 to the host
EXPOSE 80

# set the default application that will start when the container start
CMD ["apache2-foreground"]