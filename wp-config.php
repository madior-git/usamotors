<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'piece' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>, 35(t#tU,<l{R+yTT&{qm;FVIihLX7,@ Z;j&@?/NS~/GBp)Ak eN5]eUs.*pR' );
define( 'SECURE_AUTH_KEY',  'MY1s|)s@U-up&ThS1.Dh8Y,YLI?_$]}:|eH+UxZ+E:AzwVp2zv*Emf;(l?97T0n^' );
define( 'LOGGED_IN_KEY',    'Wnzro/C`=}pD?2<Fe1lZEQC&IJ#=d|-]P0]g:o]3wM#x@F&V>yRgrfxt_puZV,4R' );
define( 'NONCE_KEY',        '(qX([yfGoAuwvA`QR~]R3N]Z/G+&>* |}WO/O1&l0g5R@>{-<xW^`0p1@$O|P.mt' );
define( 'AUTH_SALT',        'Tl|?-#mmd`AL<^rGrLorG/F2fpXJ<bH4!@|GERX1eP}r^zXXt-qpFHC ^JjTK-/4' );
define( 'SECURE_AUTH_SALT', '</7]4r2-c{<%xr nPut<]+Ze=<_Og. fp<A]P,T<G^Bn?e=r#8kS-8fc!F.`ek?9' );
define( 'LOGGED_IN_SALT',   '~Zb0_dX9z=}#8+MI.gpqJd8}r%S7A#E~s}4cc-lJ6/VayK>GL=hT5@p{.Oirv[z3' );
define( 'NONCE_SALT',       '&i50hU>ZO(X0k6CZMGR!WR0^16 Cq%aARHSwJH_5~6=5J~n{q#PMd1Y(A_u2)tuH' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
