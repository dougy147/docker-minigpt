FROM php:8.1-apache

RUN apt-get update
RUN apt-get install jq curl -y

# APACHE CONFIG FILES
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ports.conf /etc/apache2/ports.conf

# SIMPLE WEBSITE FILES
COPY ./html/index.php /var/www/html/index.php
COPY ./html/style.css /var/www/html/style.css
COPY ./html/src/chatbash /var/www/html/src/chatbash
COPY ./html/js/title_anime.js /var/www/html/js/title_anime.js

# GIVE RIGHT PERMISSIONS
RUN chown -R www-data:www-data /var/www/html
