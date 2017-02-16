##This repo contains a bash script for installing Wordpress and LAMP## 

###1. In wp-config you will find the following section:###
	define( 'DB_USER',     'username_here' );
	define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
	define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
	define( 'NONCE_KEY',        'put your unique phrase here' );
	define( 'AUTH_SALT',        'put your unique phrase here' );
	define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
	define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
	define( 'NONCE_SALT',       'put your unique phrase here' );

Change the 'put your unique phrase here' to something else, e.g. use https://api.wordpress.org/secret-key/1.1/salt/ 

In install.sh change "your_ip" to the ip of your server (for localhost just comment out the line)

###2. Run the script by typing###
	sudo ./install.sh

###3. In order to be able to install themes and plugins via WordPress frontend create a user (or use an already existing)###
Add the user to the group www-data by typing:
	sudo usermod -aG www-data userName
