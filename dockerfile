# Utilizamos una imagen base de PHP con Apache
FROM php:7.4-apache

# Instalamos la extensión MySQLi
RUN docker-php-ext-install mysqli

# Copiamos el contenido de nuestra aplicación al directorio /var/www/html del contenedor
COPY ./app /var/www/html

# Establecemos el directorio de trabajo
WORKDIR /var/www/html

# Exponemos el puerto 80 para que Apache pueda recibir solicitudes
EXPOSE 80

# Iniciamos el servidor Apache al ejecutar el contenedor
CMD ["apache2-foreground"]