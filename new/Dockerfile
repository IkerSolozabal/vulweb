FROM php:8.0-apache

RUN apt-get update \
    && apt-get install --no-install-recommends -y curl

RUN apt-get update \
    && apt-get remove --purge --auto-remove --allow-remove-essential -y curl \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
	ssl-cert \
        libssl-dev \
    && rm -rf /var/lib/apt/lists/*

COPY ./html/ /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

COPY ./ssl/certificate.crt /etc/ssl/certs/
COPY ./ssl/private.key /etc/ssl/private/
    
RUN mkdir /etc/apache2/ssl
COPY ./ssl /etc/apache2/ssl

COPY ./default-ssl.conf /etc/apache2/sites-available/   
COPY ./ssl-params.conf /etc/apache2/conf-available/ssl-params.conf
COPY ./000-default.conf /etc/apache2/sites-available/

RUN a2enmod ssl
RUN a2ensite default-ssl
RUN a2ensite 000-default

RUN docker-php-ext-install mysqli
