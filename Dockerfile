FROM php:apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
WORKDIR /var/www/html
COPY . .
EXPOSE 80
CMD ["apache2-foreground"]
