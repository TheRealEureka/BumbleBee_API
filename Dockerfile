FROM php:8.1-apache
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV APACHE_RUN_USER=www-data
ENV APACHE_RUN_GROUP=www-data
ENV APACHE_PID_FILE=/var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR=/var/run/apache2
ENV APACHE_LOCK_DIR=/var/lock/apache2
ENV APACHE_LOG_DIR=/var/log/apache2
ENV LANG=C

EXPOSE 8080

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

COPY conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY conf/apache.conf /etc/apache2/conf-available/z-app.conf
COPY conf/apache2.conf /etc/apache2/apache2.conf

RUN a2enconf z-app

RUN service apache2 restart
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer