FROM php:8.2-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd xdebug

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
    mv composer.phar /usr/local/bin/composer

RUN apt update && apt install -yqq nodejs npm

COPY --chown=www-data:www-data . /var/www/

COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN cd /var/www/ && \
    composer install && \
    npm install --force && \
    composer require symfony/webpack-encore-bundle && \
    composer require symfony/dotenv && \
    npm run build

USER www-data

WORKDIR /var/www/

EXPOSE 80