# First, specify the source image, it will be used as the basis
FROM php:7.4-fpm

# RUN executes the command following it in the context of our image.
# In this case, we will install some PHP dependencies and modules.
# To install modules, use the command docker-php-ext-install.
# Each RUN creates a new layer in the image, so concatenating commands is recommended.
RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libonig-dev \
        libpq-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
    && pecl install mcrypt-1.0.3 \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable mcrypt

# Where without the composer.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Let's add our php.ini, we can define our config values (haven't corrected it yet)
ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

# Determine the working directory for PHP
WORKDIR /var/www

# Launch the container
# From the documentation: The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable,
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD ["php-fpm"]