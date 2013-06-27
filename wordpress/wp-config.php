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
define('DB_NAME', 'ronald_real');

/** MySQL database username */
define('DB_USER', 'ronald_kike');

/** MySQL database password */
define('DB_PASSWORD', '123abc');

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
define('AUTH_KEY',         'lFO}fo:$fN~7n!%PoZ,-E}VorY-,4 `59nmj#>N69@4A0UET@(UBV148^826z6dc');
define('SECURE_AUTH_KEY',  '9?0G|vt[6:7Dqo[9w)pgw}`5^FfT-*=1|DjB&xBk)%+#1|F3/P|(w%^$7)-4*(#0');
define('LOGGED_IN_KEY',    '4Yu[!6wawnZL,lGu{5+TQ]R#z^F_nPV}^Jzp7^J1B9q=tL-6oU&xOX!HiU-GXYSB');
define('NONCE_KEY',        'rti1U&C~!Yg[ )(qp~I%YWOG!;2%-4qNej1}6+,NmxQY+L1WQb?Cj3mQT;u{.)b,');
define('AUTH_SALT',        'j85(,spT[$R;yhen+?a02*x-L>Z)r#T]`@Ww)m3jlyT: iS>tfK}KiY+VwM&g@ N');
define('SECURE_AUTH_SALT', 'JkC(cvX7ZYQ+.UN|_H%j[4L.S[_~Ov<Q#xYI$2e+T>KIw2H,ygDbky}CQgI_cl([');
define('LOGGED_IN_SALT',   'fw]T;aQ_1wi^EiX_]ka?c|zY-%Pj>ImZV!E=h+17jl-Z-[NkVe3~/J/-i]cZT@]p');
define('NONCE_SALT',       '4rCO L (4j?LqJsfzkkO-Q`9eTeD/lx5+dXS9$^~^!|g.R6x1IN8.I-+|*F$M?*O');

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


