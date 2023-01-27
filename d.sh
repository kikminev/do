docker build -t nginx .

docker run -v /Users/kik/www/do:/var/www/html -d --name nginx -p 80:80 nginx

docker exec -it nginx /bin/bash