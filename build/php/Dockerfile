FROM php:7.3-fpm

RUN groupadd -g 200000 symfonyd
RUN useradd -u 200000 -g 200000 symfonyd

RUN mkdir /var/run/php
RUN chown -R 200000:200000 /var/run/php
RUN chmod -R g+w /var/run/php

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY ./config/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

RUN apt-get update && \
  apt-get install -y libicu-dev
RUN docker-php-ext-install intl

WORKDIR /usr/local/apache2/htdocs/