FROM php:7.4-fpm-alpine

RUN apk upgrade --update && docker-php-ext-install mysqli pdo pdo_mysql bcmath

CMD [ "php-fpm" ]

WORKDIR /app

EXPOSE 9000
