FROM php:8.1-apache-buster

RUN apt-get update && apt-get install -y \
            git \
            zsh \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            libpng-dev \
            libzip-dev \
        && docker-php-ext-install pdo pdo_mysql \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

RUN rm -rf /var/www/html && \
    ln -s /app /var/www/html

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN sh -c "$(curl -fsSL https://raw.githubusercontent.com/ErickRock/oh-my-zsh-on-windows-terminal/master/tools-zsh-install.sh)" -y

RUN echo "xdebug.mode=off" | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini > /dev/null && \
    echo "xdebug.start_with_request=yes" | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini > /dev/null && \
    echo "xdebug.client_host=host.docker.internal" | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini > /dev/null