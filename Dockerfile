FROM ubuntu:latest

ENV TZ=Europe/London
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql

COPY . /var/www/html

RUN a2enmod rewrite

EXPOSE  80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
