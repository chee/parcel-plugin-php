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
define('DB_USER', 'chee');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Qoh37}g!SeC87x>`>Q;/<u3r>zhAR?=gY,z> il|MS3 SLlz9QVEa.:Stqp];c g');
define('SECURE_AUTH_KEY',  'Y7G*-uOxK`LdphR}qD1|_Cw1MW_ JWVRLL3jC8q~mse0^]P;QfUinSUb~EzyBc9/');
define('LOGGED_IN_KEY',    'U.I<Bcx?CkH% _K7WcQ+-;&hp,S]KeTZ2l*s8Gll~UHH(Hs( csE2FK[vr]tXP<5');
define('NONCE_KEY',        'zev/bu1.EX!n,It]{Ft,VS<QM~tVKN]D;?kHucOo{e?{JI>o=}Ahbuk>1H&jIrzQ');
define('AUTH_SALT',        ']I5(Q>L7k~*]{sL!z1eoLIU,=IR9~bD|ZgA^Q%[%!8a=>GgN/<I|.HwNJJN3DkY_');
define('SECURE_AUTH_SALT', 'x(tYKeNqP3J@_w(U;T80{{DjH^ArqZwX-J=bl<5t3$>WeIEu8_f^%{MjQ)&vRfls');
define('LOGGED_IN_SALT',   '2B8fdJ*v&AI0S#J4}_:w%&yr]VYRde q>eSy+-4Wxo4ejly]5L>mjR,X46J7y!9r');
define('NONCE_SALT',       'vtI!#V4*FI+agz{Y_?vf7;Io%:G;=b$<~z]~o]wKT%D>=KTc]]( XS$RCf6up*(6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pretty_';

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
