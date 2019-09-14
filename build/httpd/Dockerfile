FROM httpd:2.4

RUN groupadd -g 200000 symfonyd
RUN useradd -u 200000 -g 200000 symfonyd

RUN mkdir /var/run/php
RUN chown -R 200000:200000 /var/run/php
RUN chmod -R g+w /var/run/php

RUN chown -R 200000:200000 /usr/local/apache2

COPY ./config/httpd.conf /usr/local/apache2/conf/httpd.conf

COPY ./config/httpd-vhosts.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf

COPY ./config/php-fpm.conf /usr/local/apache2/conf/extra/php-fpm.conf

WORKDIR /usr/local/apache2/htdocs/