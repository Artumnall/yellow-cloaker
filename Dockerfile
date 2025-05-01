FROM php:8.1-apache

# Instala o Composer
RUN apt-get update && apt-get install -y unzip \
  && curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

# Copia os arquivos do projeto
COPY . /var/www/html/

# Vai para o diretório do app e instala dependências do Composer
WORKDIR /var/www/html/
RUN composer install

# Corrige permissões
RUN chown -R www-data:www-data /var/www/html

# Ativa o módulo de reescrita do Apache
RUN a2enmod rewrite

EXPOSE 80
