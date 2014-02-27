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
define('DB_NAME', 'clark');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ']k)R&3H9SFrpUv>s6Y!vS,6mD=ANonhid8CNU?I_%},j?>nK)4,$.`D81T}ko0WK');
define('SECURE_AUTH_KEY',  'n31&Fy.vHb1#]6b?5Q:L(l)%Fv%gjo-:uAo?2DYmd|/SK-qk,6&h/m+-fc#aZsI$');
define('LOGGED_IN_KEY',    '-S{-RNtOT=ESC?DRi1Z2bg)[F!3KBaqK95NH;+dX!fY6HB1(I2,7=A%(,`}KAZTt');
define('NONCE_KEY',        '}@n5S4}_[Iy28Aqt$2D&-fn;nA-uT+(]bIw}SB]L>a*Yc=a)2P@dw8ZV^qnN^o4v');
define('AUTH_SALT',        'YLh- <k8-/%dKAJ5y5@6q 0bG 8O q}h(-wQtv(s[.5&SZP0X @/X}CO8QAAvN8)');
define('SECURE_AUTH_SALT', '<8DMF#M;dOiv@asR-|rZKEh~rkk?-4M0o3.T&qkBH_+:;}E-Dr:$6Bw;5Xxy1Z*>');
define('LOGGED_IN_SALT',   'xZLwOnOh:~#Ra(.#e;cBq+5_F|H_[2+>gyB&]x$*:@KKk$Ii0:u#/dzQ++n4yYES');
define('NONCE_SALT',       '|v%uFd^2*|g !n:33o*|gG|?Wz+Nj&a]4{1r>9&77*1@5?U]`1q`4lMEwuQo`ygk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
