FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN composer install --optimize-autoloader --no-dev

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/

EXPOSE 9000

CMD ["php-fpm"]
