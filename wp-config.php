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
define('DB_NAME', 'chothain_wp');
// define('DB_NAME', 'chothai');

/** MySQL database username */
define('DB_USER', 'chothain_wp');
// define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oUD9CSa*2MqT');
// define('DB_PASSWORD', 'pa55w0rd');

/** MySQL hostname */
define('DB_HOST', 'localhost');
// define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'q),tYQ3%{X,-,(>*.F?pbZH^|2Cwc:R-1BUH.Ef+UQ]}@_i=wm4J]}I*->-&.z0+');
define('SECURE_AUTH_KEY',  'i0W@Y6_}<XAtX|-jAB4j~C|`z&+Lu%>T_(y/^n8!~Raa1d{p`U$@FZJq:b[3no>F');
define('LOGGED_IN_KEY',    't85P0vQKb}es9e6e8$ku+8]yv!%IY!dCD?R_+5VbqxY%m^`ZvoBYZ,2b|D5.+0/P');
define('NONCE_KEY',        '+#gM?.#&#C+pv`S^z8wVC#%YLA8rMgWlYU[-Huzs]+EWTm#^P*9H9@kQb^fRW.VW');
define('AUTH_SALT',        'vrKraA;fJ/rM&0J0aZLzB}JUfO.)IKP]N;=}.2>&/7cO_+a7dCi/[-5t~>+^qI>J');
define('SECURE_AUTH_SALT', '{Y[pH W#w@sgf[c<w*Mq-+@O@7ROeOs,+G9X-e)Q~YNU:6d6+xrA|/(plO=e MRg');
define('LOGGED_IN_SALT',   'JYEVVB%763iS-+&0X;k#Ye1Pfs;%cUk#-M^}KSJ|X?3-x[9)wXxb>_ys=nBW8W{A');
define('NONCE_SALT',       ']G`se3,W-fJJiAgRn wgR 1iZ]Vx0FqNNcGBUQWI+6|,!PUq^XM(sXYE5@sE-`xK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tm_';

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

define( 'WP_MEMORY_LIMIT', '128M' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');