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
define('DB_NAME', 'swanSite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '195274561');

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
define('AUTH_KEY',         '{:5 XBz)3tGu!|wpKd-rX;J0R{InMF[b-dA2Ec<%qFZyL1?l1[3h$R&K.P ar<tw');
define('SECURE_AUTH_KEY',  'IWVFWM@oD8[3%^7-83(US0HR5&}xRXiTfeJ=8h<$3lep* w`DsW|@kt64Yzx(bEr');
define('LOGGED_IN_KEY',    '>f#[c*v;_V5}6h+.6JY[MTx^FiY^)R:(-.fq1]6B 9<78fONb`qP~);z8v|Nr>W#');
define('NONCE_KEY',        '`/<Eq]PZq&[,K[k7LEI)p(-Kfy z36qWZ/ysTr{uD*+ChZV#Z4|msO@0F [Vc^x-');
define('AUTH_SALT',        '[GG~21ZobO!`)hJUITP{npbG@wg6ZP=C.[vs;AQw=%DAVk~&sihXqHxWS8b&WW*j');
define('SECURE_AUTH_SALT', '6K5{X:d;d!P9+;h#V(X8NI)6,FzKtv=~0tSB5P1[~$z#R~vf-N%?xvpsGx 8]RN,');
define('LOGGED_IN_SALT',   '}~h!|0,-;pDa[]D(6 c2~;sL(N+zZ.EzxAVQr!lgMT~AKO~}M>pmXn8 .K~WApcY');
define('NONCE_SALT',       '{M~9|TA1tjA/Fx|dDO+ [6tKH&R`:a[%O3zy/*9MQR?Tbzk19N;4xj Ooj-}3b&u');

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
define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
