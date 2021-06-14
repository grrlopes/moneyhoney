FROM php:7.4.19-fpm
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# The php.ini-development should be replaced by php.ini-production
# in production environment
RUN ln -s /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

RUN sed -i -e 's/;extension=pgsql/extension=pgsql/' /usr/local/etc/php/php.ini
RUN sed -i -e 's/;extension=pdo_pgsql/extension=pdo_pgsql/' /usr/local/etc/php/php.ini
