FROM phpdockerio/php:8.1-fpm
ARG USER_UID
ARG USER_NAME
VOLUME /var/www/

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install bash-completion ssh iproute2 iputils-ping mc wget nano php8.1-curl php8.1-pdo-mysql php8.1-redis php8.1-xdebug php8.1-bcmath php8.1-gd php8.1-imagick php8.1-intl

RUN touch /run/php-fpm.pid \
    && useradd -d /home/dockeruser -u $USER_UID -ms /bin/bash $USER_NAME \
    && chown $USER_UID:$USER_UID /run/php-fpm.pid

COPY . /var/www

USER ${USER_UID}
