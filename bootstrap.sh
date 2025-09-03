#!/bin/bash
echo "Verificando se o Zend Framework 2 está instalado..."
if [ ! -f "/var/www/html/public/index.php" ]; then
    echo "Instalando Zend Framework 2 (v2.5.0)..."
    composer create-project --no-interaction zendframework/skeleton-application:2.5.0 /var/www/html
    if [ $? -eq 0 ]; then
        echo "Zend Framework 2 instalado com sucesso."
    else
        echo "Erro ao instalar o Zend Framework 2."
        exit 1
    fi
else
    echo "Zend Framework 2 já está instalado."
fi
echo "Iniciando Apache..."
apache2-foreground
