FROM php:8.2-apache

# Instal·lar les dependències necessàries per a MySQLi
RUN apt-get update && apt-get install -y libmariadb-dev

# Instal·lar l'extensió mysqli
RUN docker-php-ext-install mysqli

# Habilitar el mòdul mysqli
RUN docker-php-ext-enable mysqli
