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
define('DB_NAME', 'magcem_magcem');

/** MySQL database username */
define('DB_USER', 'magcem_magcem');

/** MySQL database password */
define('DB_PASSWORD', 'R@hasia123');

/** MySQL hostname testing*/
define('DB_HOST', 'mysql.freehostia.com');

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
define('AUTH_KEY',         '9o(WB@Vt)mY?c,<py4^HkJ 6 MI]k=|!L%p+*}j|tU.kxOsHRigmo4|7@V}Pb=ZQ');
define('SECURE_AUTH_KEY',  '.gR,jD)&2m|hypz:>@+1:0H%>I*[}Kg#qT{R-JO6IJd+P}i&TP[3y!r41P,UA(A:');
define('LOGGED_IN_KEY',    '{aX8FfQbnp&ESxfL:zVOMSzK_>|r;PE?oo3, [{zN*LvcB@4/3`Iv@Z^3U*6>z!b');
define('NONCE_KEY',        '.!P.4u@teGUJ/&~>%k84t%MN*sf);jsskP-zV.}]=pd$XC7a?BGT9@vi4CH5zYa)');
define('AUTH_SALT',        '5f]N V`,g7pax!;>yd2p==}V^^eu&+no50)8  {Ap~J_M3gF xEwM~)8.kG=Ja2G');
define('SECURE_AUTH_SALT', 'Vth6^ ut&^l@sT|N{GjhUs;;Jqmv1T%1NQ6(|qMX!<N<:qZt.*eQc!P1YB)W&3e7');
define('LOGGED_IN_SALT',   'BZ#fc!R,PB@l%nsB13%y8?QwKY2R+I.#?*^DA#X@5L{8I^9|;VE4v%?/,Z!:X>b?');
define('NONCE_SALT',       '1k4BYE]+m`D_.5GJ:7aaSR_[=E44IULzRm}+s3@_Rx#bn#8@X1!C#}#}|4I12CCz');

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
