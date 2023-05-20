FROM composer:2.5.5

WORKDIR /app

RUN apk add --no-cache icu-dev && \
    docker-php-ext-install intl

ADD . /app

RUN composer install

EXPOSE 80

CMD php spark serve --host 0.0.0.0 --port 80