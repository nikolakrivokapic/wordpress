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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<?1*fx?u|w+7i}Dx~P?&OIFX(rNb8p%{T8&q7}(FKu,uo/2axnY;Yn=O*O<u81OX');
define('SECURE_AUTH_KEY',  '@MAo&2~dx=c)h*:MYPmg3Op;b,HdzbZv9J@%tfX=seuv0=!}%rrvO5EO%+=Rmgg@');
define('LOGGED_IN_KEY',    '8!4flR)a9Kbh?UfwaRr<fDxZbk5V![JCq<4X;mgMLn<VaNJGV3CeQ@9dyXt62bRw');
define('NONCE_KEY',        'yq**Ry+GkchRxtHC0h#e~N#doa8(z[/|l=HN+5/dpDVN8jP7.++s[nOoIuiqrg{.');
define('AUTH_SALT',        '7x7v=Y8KJbIx#s4iFDVzm}tnZrX;;j9Al(;`;mmGePF{+|{[jp9VL[7X-glim]=h');
define('SECURE_AUTH_SALT', '$D+N>lih*Ci39idN2wC[Vb.*Mj[RM#dgG{Y{p{&rlR_ygs|;HQX(r(Sd~[<y*x)A');
define('LOGGED_IN_SALT',   'FcG^XpB-Hv ^;M=txuV|&xT)@zB#6.xDI1b?wH$VrwE`0WoByzHJv)!21KgY`*-X');
define('NONCE_SALT',       'Ye~72j~>,v7V3qz|OV[P+;{6OQL,9SUlOx6=ypjsKffu0U%Sx??jz(iC3mooDsJC');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
