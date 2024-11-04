FROM php:8.2-fpm-alpine
LABEL authors="jay"

ENTRYPOINT ["top", "-b"]