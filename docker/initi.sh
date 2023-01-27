cp -rp /var/www/html/docker/default.nginx.php.conf /etc/nginx/sites-available/default
service nginx restart
service php8.2-fpm start


apt install curl -y

curl -sS https://get.symfony.com/cli/installer | bash
mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
apt-get install -y php-simplexml
