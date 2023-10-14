FROM php:8.1-fpm

ENV WORK_DIR /var/www

WORKDIR ${WORK_DIR}

RUN apt-get update \
    && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    zlib1g-dev \
    libpq-dev \
    libzip-dev


RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install  pdo pdo_pgsql pgsql zip bcmath gd


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 9000