FROM php:8.1-apache

# Copia os arquivos do seu projeto para a pasta padrão do Apache
COPY . /var/www/html/

# Corrige permissões
RUN chown -R www-data:www-data /var/www/html

# Ativa o módulo de reescrita do Apache (para .htaccess funcionar)
RUN a2enmod rewrite

# Expõe a porta 80 (padrão para web)
EXPOSE 80
