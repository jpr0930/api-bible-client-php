FROM php:7.4-cli
COPY . /usr/src/api-bible
WORKDIR /usr/src/api-bible
# install git
RUN apt-get update \
    && apt-get upgrade \
    && apt-get install git -y
RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer
