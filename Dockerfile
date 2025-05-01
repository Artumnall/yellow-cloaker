FROM php:8.1-apache

# Instala dependências do sistema e o Composer
RUN apt-get update && apt-get install -y unzip curl git \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia os arquivos do projeto
COPY . /var/www/html/

# Define permissões apropriadas
RUN chown -R www-data:www-data /var/www/html

# Ativa o módulo rewrite do Apache
RUN a2enmod rewrite

# Roda o composer install no diretório da aplicação
RUN cd /var/www/html && composer install

# Expõe a porta padrão
EXPOSE 80
