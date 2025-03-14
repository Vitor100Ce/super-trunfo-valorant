# Usando a imagem oficial do PHP 8.2 com Apache
FROM php:8.2-apache

# Habilitando o módulo de reescrita de URL (mod_rewrite) do Apache
RUN a2enmod rewrite

# Instalando pacotes necessários
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    && rm -rf /var/lib/apt/lists/*

# Instalando o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiando o arquivo composer.json e composer.lock (caso exista) para o contêiner
COPY composer.json composer.lock /var/www/html/

# Instalando dependências do Composer
RUN composer install --no-dev --optimize-autoloader --prefer-dist

# Copiando o restante dos arquivos para o diretório do Apache
COPY . /var/www/html

# Alterando a propriedade dos arquivos para o usuário do Apache
RUN chown -R www-data:www-data /var/www/html

# Alterando o DocumentRoot para o diretório public
RUN sed -i 's|/var/www/html|/var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Expondo a porta 80
EXPOSE 80

# Comando para rodar o Apache no modo foreground
CMD ["apache2-foreground"]



