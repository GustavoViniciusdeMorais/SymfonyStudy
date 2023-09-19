# FROM gustavovinicius/gusphp7:latest
FROM gustavovinicius/symfony4:latest
# FROM gusphp71:latest

RUN apt update

# RUN apt-get -y update

# RUN apt install nginx -y

# RUN apt install nano

# RUN apt install curl -y

# RUN apt update

# RUN apt install systemctl -y

# RUN apt install git -y

RUN apt install net-tools -y

ADD ./nginx/default.conf /etc/nginx/sites-available/default

# RUN chmod u+x phpInstall.sh

# RUN phpInstall.sh

# RUN mkdir /var/www/mysite

# RUN mkdir /var/www/other

WORKDIR /var/www/html


ENTRYPOINT ["tail", "-f", "/dev/null"]