FROM php:7.4-fpm


# add php extension
RUN docker-php-ext-install opcache \
 && docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
    
RUN apt update \
&& apt-get install -y default-mysql-client

ENV PATH $PATH:/usr/local/bin

