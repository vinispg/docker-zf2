#!/bin/bash

if [ ! -f "/var/www/html/public/index.php" ]; then
    echo "Instalando Zend Framework 2 (v2.5.0)..."
    composer create-project zendframework/skeleton-application:2.5.0 /var/www/html
fi

echo "Iniciando Apache..."
apache2-foreground
