FROM richarvey/nginx-php-fpm:latest

RUN cp -R /app/docker/config/nginx/* /etc/nginx/
