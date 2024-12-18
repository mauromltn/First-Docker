# Usa l'immagine PHP di base
FROM php:8.0-apache

# Installa le estensioni necessarie
RUN docker-php-ext-install pdo_mysql

# Copia i file del progetto nella directory del server web
COPY src/ /var/www/html/