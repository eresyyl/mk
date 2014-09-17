<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u197274629_esagu');

/** MySQL database username */
define('DB_USER', 'u197274629_abera');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty123');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.ru');

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
define('AUTH_KEY',         'iu`S]u>pDU3V[:yx|{wt:B<T2^0-nd#?Y>vRbZ9Q#F%%b*1#(JJhl5*sY|+2ZU>K');
define('SECURE_AUTH_KEY',  'l7^h6,y6=Y0e=S}xqj^{yN#br>Nuyc9cPW8{Vk 5f65|2IHA+`&wcL>#n=c:U%d(');
define('LOGGED_IN_KEY',    '-eXpuIrF`4KxQ%bJhgd`i)->z(+.(!>d{?^&M8Nd((DM!N]|~-SEhwHLJqN/YZ9F');
define('NONCE_KEY',        'nGne],| crBT%kL`#TZNiTB!nBz~|LHH-BfF7D?bVD5*5|FYuB^K-4$iE6K@@K&O');
define('AUTH_SALT',        ' LHD~Vv_f(P$Sk}o.K(KZbTVt($Tq-;}o!mhEaN?yC>A#LOtwK.y!+H!($cT9w< ');
define('SECURE_AUTH_SALT', 'j2,e*}p)u7w/(X 8h@-MbpfA7x/E,iNo^+$]-rb^ge!?W~Eu9&SHn3U|i##D>,MK');
define('LOGGED_IN_SALT',   'BUL`_s-|Mh-wJ` 0tF}m$C(!b&0cW6+.?N+;u0w^3np?Utp[tfx9CktG-Hoos}A/');
define('NONCE_SALT',       'Q?[,VAMT`Kc_Ry-K[ZG ZN,R1kX-N:PDg %#I_#chaX{zrfVkC`/}{haV?Qk1OWM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
