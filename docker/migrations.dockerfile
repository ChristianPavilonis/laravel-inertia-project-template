FROM php:7.4-cli-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql

ENTRYPOINT php /app/artisan migrate:when-ready && php /app/artisan storage:link
