FROM php:8.1-fpm
WORKDIR /var/www
ADD . /var/www

# permission
RUN chown -R www-data:www-data /var/www

# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# install packages
RUN apt-get update \
  && apt-get install -y \
  gcc \
  make \
  git \
  unzip \
  vim \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libmcrypt-dev \
  libpq-dev \
  python-is-python3 \
  curl \
  gnupg \
  openssl \
  nodejs \
  && docker-php-ext-install pdo_pgsql pgsql \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

# Add php.ini
COPY php.ini /usr/local/etc/php/

RUN docker-php-ext-install pdo_mysql
