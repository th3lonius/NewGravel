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
define('DB_NAME', 'th3loniu_gg2015');

/** MySQL database username */
define('DB_USER', 'th3loniu_master');

/** MySQL database password */
define('DB_PASSWORD', 'Johnfrum26?');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://matthewmesaros.com/gg2015');
define('WP_SITEURL', 'http://matthewmesaros.com/gg2015');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CCbAh?a0| r1jpVg#g5&x1ILQ({us4i4BPh-:7yH/rn*Ehw2J+ 7BYQfD8,c-x;}');
define('SECURE_AUTH_KEY',  'N5x+NM?R+`DxLv+B #Rt*#Z(j=8Q;AbbZ`[f*T|+-qQLK=b0G&hX,a~g@^V~|/Mj');
define('LOGGED_IN_KEY',    '>YM1n1*+{9a7Kf5I6PS+O:wBZY<EuOAS4;a3=Jf.gJfl:SblW!K$+=di1CJlxec%');
define('NONCE_KEY',        'iFLk)cRh/4Q5Gg6|iQC!qAP)cD~N+m]`,2t.]|oM+5;ss!r7-Bh?o[|GFw|DfSI+');
define('AUTH_SALT',        ')f7PR#6[t&rnF7oK:rRCHrNz7z]b&8|Y 1x9(>m7|swNlg7xnC0s.]-.<dD_oTi%');
define('SECURE_AUTH_SALT', '_/GnsA1|N}9:hYIML,}+F|4]q*-wl;[d6-(KhzPLi5.#<XV,#3ghsnr&<2@g<+.~');
define('LOGGED_IN_SALT',   'S<6)OpqSQ0[7=M2J3PUE/b9(ACZ.yq$$YQYKhmdl|{+iB!--%`*;B$eR%F/`lj<f');
define('NONCE_SALT',       'mN|G6@MdJ|jbp{R`J+9*21%_h9GExs|8z}W .M},2oOFNSFMg-gy=M+~L;`:TRL9');

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
