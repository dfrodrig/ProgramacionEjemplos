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
define('AUTH_KEY',         '#!WA-2+7m:nWNvesEp}NDg+K~+2s!R[DH|OeEiG-@}?&F:XX4($Zq}C:WS`.drNY');
define('SECURE_AUTH_KEY',  'Ag(eD+I-D=2$kh%>OH1]{:Q+XJ+Ol%3,&M@j`@v.A:Nvc_JxEQzHTOI8>z%},aEG');
define('LOGGED_IN_KEY',    'EOByl3O|tlLe@b+r1zmrb?M{q6Xm?^03=FNxh=<g^ew_L19Kq@VH3?Hzi<G]&ti)');
define('NONCE_KEY',        '(nL!8{6d2h3zv)G)L;X=;#S9hyXY:=%ZXpOG! SJ?K}VV? h;vW!;%?!bDck0UXX');
define('AUTH_SALT',        '&|+xnA5]#(!qKvIA}P0kk&D~>12f9oJo*D[u6_4y#f`08vA2TF1-h.1?ng!5EVbk');
define('SECURE_AUTH_SALT', ']ZGb-58{cLP);d{hD}5]FM;);j9{9lM(%iH|gV[I<Z6hvOskSL#|,A8s=548#H1!');
define('LOGGED_IN_SALT',   'h9G*NSI7UU3ZV?+(=#2NYcSj|-`EREN>-LJjSr5<N0X8<G(N[.|@uu1)6)cXf=D.');
define('NONCE_SALT',       'TQuK}26;8MxJyK6O1GB=&Pdf(*,;bkpa/[3yt`NnA&y4&oWe4g~hfuYHf^S(=L#G');

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
