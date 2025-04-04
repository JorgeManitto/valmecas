# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    gnupg \
    ca-certificates \
    && docker-php-ext-install pdo_mysql zip

# Instala Node.js (usamos NodeSource para una versión más moderna)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Habilita el módulo de Apache rewrite
RUN a2enmod rewrite

# Copia el contenido del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala dependencias PHP
RUN composer install --optimize-autoloader --no-dev

# Instala dependencias de Node.js
RUN npm install

# Compila assets (Tailwind, JS, etc.)
RUN npm run build

# Establece permisos para el storage de Laravel
RUN chown -R www-data:www-data /var/www/html/storage

# Cambia el directorio raíz de Apache a /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
