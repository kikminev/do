cp -rp /var/www/html/docker/default.nginx.php.conf /etc/nginx/sites-available/default
service nginx restart
service php8.2-fpm start


# RUN THIS MANUALLY
apt install curl -y

curl -sS https://get.symfony.com/cli/installer | bash
mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
apt-get install -y php8.2-xml

apt-get install php-pgsql

service nginx restart
service php8.2-fpm start

# apt-get install software-properties-common
# dpkg --remove --force-remove-reinstreq libnode-dev
#dpkg --remove --force-remove-reinstreq libnode72:amd64

# curl -sL https://deb.nodesource.com/setup_19.x | bash -
# apt-get install -y nodejs