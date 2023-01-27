cp -rp /var/www/html/docker/default.nginx.php.conf /etc/nginx/sites-available/default
service nginx restart
service php8.2-fpm start