FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    g++ \
    libmagickwand-dev --no-install-recommends

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath gd intl zip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install xdebug-3.3.2 \
    && docker-php-ext-enable xdebug

# Copy php settings
COPY ./php.ini ${PHP_INI_DIR}/conf.d/99-php.ini

# Set the working directory
ENV WORKDIR=/var/www/html
RUN mkdir -p ${WORKDIR}
WORKDIR ${WORKDIR}
