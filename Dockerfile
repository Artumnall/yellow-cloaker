FROM php:8.1-apache

# Instala o unzip e o Composer
RUN apt-get update && apt-get install -y unzip \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia apenas os arquivos do Composer primeiro (melhora cache do Docker)
COPY composer.json ./

# Instala as dependências do Composer
RUN composer install

# Agora copia o restante do projeto
COPY . .

# Corrige permissões
RUN chown -R www-data:www-data /var/www/html

# Ativa o módulo de reescrita do Apache
RUN a2enmod rewrite

EXPOSE 80
