FROM php:8.2-fpm as php

#WORKDIR /app

#VOLUME /app/var/

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apt update && apt-get install -y --no-install-recommends \
	file \
	git \
	&& rm -rf /var/lib/apt/lists/*

RUN set -eux; \
	install-php-extensions \
		@composer \
		apcu \
		intl \
		opcache \
		zip \
        pdo \
        pdo_mysql \
	;

#COPY --link frankenphp/conf.d/20-app.prod.ini $PHP_INI_DIR/app.conf.d/

WORKDIR /var/www

COPY --link composer.* symfony.* ./

# --no-autoloader
RUN set -eux; \
	composer install --no-cache --prefer-dist --no-dev --no-scripts --no-progress

RUN chown -R www-data:www-data /var/www

COPY --link . ./
COPY --link .env.example.prod ./.env

# RUN chmod 777 -R bootstrap/

FROM caddy:2.8 as caddy

COPY --link Caddyfile /etc/caddy/Caddyfile
