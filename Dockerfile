FROM php:5.6-apache

# Repositórios e pacotes
RUN echo "deb http://archive.debian.org/debian stretch main" > /etc/apt/sources.list && \
    echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/99no-check-valid-until && \
    apt-get update && \
    apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libpq-dev && \
    docker-php-ext-install zip mysqli pdo pdo_mysql pdo_pgsql && \
    a2enmod rewrite

# Instala Composer v1 (necessária pro PHP 5.6)
COPY --from=composer:1 /usr/bin/composer /usr/bin/composer

COPY bootstrap.sh /usr/local/bin/bootstrap.sh
RUN chmod +x /usr/local/bin/bootstrap.sh

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
CMD ["bootstrap.sh"]
