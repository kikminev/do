FROM ubuntu
 
RUN apt-get update && apt-get upgrade -y

RUN apt install nginx -y
RUN apt install vim -y

RUN apt install expect -y


RUN apt-get update && apt-get upgrade -y
RUN apt-get install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt update
RUN apt install php8.2-fpm -y

RUN service php8.2-fpm start



EXPOSE 80
 
CMD ["nginx", "-g", "daemon off;"]:
