# Use the specified base image
FROM php:latest

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all the PHP and related files from the current directory to the container's working directory
COPY . .

# Install any additional PHP extensions if needed (uncomment and modify the following line)
# RUN docker-php-ext-install pdo pdo_mysql

# Expose the port (if your PHP application listens to a specific port, usually 80)
EXPOSE 80

# Start the PHP built-in web server
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]