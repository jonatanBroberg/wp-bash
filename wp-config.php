<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpressuser');
/** MySQL database password */
define('DB_PASSWORD', 'sqlpassword123');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L+KNMHoS90ZGucn48[5F-{Om^:Jlmtu+Cmro`oOZP<0`|wDw-c_M;5<Q+Zx(iKdc');
define('SECURE_AUTH_KEY',  ';AH@/Uv+#I#1u-8bQ~m#z-!}f,I!tjaes}7x4Qg+Y8W:Pp>v:RJWv~c7CO:RDFkA');
define('LOGGED_IN_KEY',    'Q8Bh[(@n@G;5lmY%@|JhZR7+XO7bf$3Tnk!:EaGq]vG+&5_j;Pl>-XM|C{=s@+a9');
define('NONCE_KEY',        '`Y0/H}sAw:(#+&zR;)v~(tO!C&[ET_*xPf=ECmd>E}elnHg+ip0k)[rw6KlEUF@+');
define('AUTH_SALT',        'G3OX&.<%-qD|IK8|7lQV42Ki<w/jNQs*cpg[{g(H1aE|@hM*0F/E6=nl)Q!4D2.R');
define('SECURE_AUTH_SALT', 'Sg+{$KHkz91OdcT&)9Q&c+BIKFC#jfZxM|@~;pMmFs`VU[!8p_e/|a92KkuhK)$v');
define('LOGGED_IN_SALT',   'pv[pn&P<*D;P8]x+CTGK!KUk6S7]?ux=~t![e#1j]lIk!Lu;h|ilW#7zgM~t1(Dx');
define('NONCE_SALT',       'e6-uId>tWp|LSwn<!YOO|P|E/P/jU|+X><V;]MtmfCn+BxOxwj fOZF^zn~?4C-b');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
