#!/bin/bash

apt-get update

#Install apache
echo "\n Installing Apache \n"
apt-get install -y apache2

echo "ServerName your_ip" >> /etc/apache2/apache2.conf

systemctl restart apache2

ufw allow in "Apache Full"

# Install MySQL
echo "\n Installing MySQL \n"
export DEBIAN_FRONTEND=noninteractive

apt-get install -y mysql-server

mysqladmin -u root password admin123

#Install PHP
echo "\n Installing PHP \n"

apt-get install -y php libapache2-mod-php php-mcrypt php-mysql

# Install wordpress
echo "\n Installing wordpress \n"
curl -O https://wordpress.org/wordpress-4.7.2.tar.gz

tar xzvf wordpress-4.7.2.tar.gz

touch wordpress/.htaccess

chmod 660 wordpress/.htaccess

cp -a wordpress/. /var/www/html

rm -r wordpress
rm wordpress-4.7.2.tar.gz

#Configure Wordpress
mysql -u'root' -p'admin123' < create_db.sql

cp wp-config.php /var/www/html

rm /var/www/html/index.html

chown -R root:www-data /var/www/html/*

systemctl restart apache2

mkdir /var/www/html/wp-content/uploads

chown -R root:www-data /var/www/html/wp-content/uploads

chmod -R 755 /var/www/html/wp-content
chmod -R 775 /var/www/html/wp-content/uploads
chmod -R 775 /var/www/html/wp-content/themes
chmod -R 775 /var/www/html/wp-content/plugins

touch /var/www/html/.htaccess

chmod 600 /var/www/html/.htaccess


# Enable ftp
sudo apt-get install -y vsftpd
sudo ufw allow ftp
