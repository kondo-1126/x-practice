FROM php:8.2-fpm

# 必要なPHP拡張をインストール
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    curl \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer をインストール
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリを指定
WORKDIR /var/www/html
