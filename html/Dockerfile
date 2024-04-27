FROM ubuntu:latest

ENV TZ=Europe/London
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql

RUN rm /var/www/html/index.html

COPY . /var/www/html

RUN chown www-data:www-data /var/www/html && chown -R www-data:www-data /var/www/html/*

RUN a2enmod rewrite

EXPOSE  80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
