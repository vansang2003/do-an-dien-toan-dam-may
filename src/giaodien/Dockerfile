# Dockerfile cho PHP
FROM php:7.4-apache

# Copy mã nguồn PHP vào container
COPY . /var/www/html
# COPY ./thuchanh/php /var/www/html

# Cài đặt các extension PHP cần thiết cho kết nối MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql