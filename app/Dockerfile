FROM php:8.1-fpm

ENV WORK_DIR /var/www

ARG NODE_VERSION=18

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
    libzip-dev \
    gnupg2

# installing  nodejs

RUN curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_VERSION.x nodistro main" > /etc/apt/sources.list.d/nodesource.list \
    && apt-get update \
    && apt-get install -y nodejs 

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install  pdo pdo_pgsql pgsql zip bcmath gd


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 9000