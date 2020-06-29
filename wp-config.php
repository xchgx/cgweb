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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresscgweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':QF6~v,UJn=+c>t[g^3}(l[v`c.6p>1x&,n{:9hsu5g&a&FR7VL>Y1KMh&28t)~Q' );
define( 'SECURE_AUTH_KEY',  ' LN0!cCw/^|Mxh0*QonFmkNxTSru@2Lh).N5}6J%FGK.o;4at(?zF#E7G?!|(x1Q' );
define( 'LOGGED_IN_KEY',    'YQ`<sZ+H}>:(@IB*l^25W/Maij^)Qn(9ZL]z(D#9K{&y_p@V90p=c+YUWni!GKr^' );
define( 'NONCE_KEY',        'K7K[q*D-XcVf[U;<;R~6Hd):2)4^FX9O<v;75}m1nsjUS-i{)&eh>ECw/zuni~c+' );
define( 'AUTH_SALT',        'fsh-9dWJLMW(ls4tS3=q*h+@#Sf(3^z|WSx97+qK`%AAXd=[XDJu&rqO<EmA|MIn' );
define( 'SECURE_AUTH_SALT', 't)vl=FRL#i_^7R:2Sg_GUxS+Srka|~X(va#fFn/U,CQ]3xWMEpf)Aw>T;g|Wp$@h' );
define( 'LOGGED_IN_SALT',   ';){M{6&KoZk$#Px%wOcP@UP7)K6RxA2-m3HX[cBUCr%&WemIJaF&epVd0,nFoG-I' );
define( 'NONCE_SALT',       's5rX(hCt>Cy6y(%6KAx/M=hcxd&:5p|Z@U):{Y=.9FM FjIt4M0UNX*JEY_,cq8_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
