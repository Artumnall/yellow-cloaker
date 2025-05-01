FROM php:8.1-cli

# Instala o Composer dentro do container
RUN apt-get update && apt-get install -y unzip git zip && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Define diretório de trabalho
WORKDIR /app

# Copia os arquivos do seu projeto
COPY . .

# Instala as dependências do Composer (como noodlehaus/config)
RUN composer install || true

# Expõe a porta padrão do PHP
EXPOSE 80

# Inicia o servidor embutido do PHP
CMD ["php", "-S", "0.0.0.0:80", "index.php"]
