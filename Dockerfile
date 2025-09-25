# Usa la imagen base php:7.4-apache
FROM php:7.4-apache

# Instala las extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Habilitar headers
RUN a2enmod headers

# Copia los archivos de la aplicación al directorio del servidor web
COPY ./html /var/www/html/

# Configura el VirtualHost para permitir .htaccess
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Expon el puerto 80 para acceder al servidor web
EXPOSE 80

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]
