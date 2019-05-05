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
define( 'DB_NAME', 'ecom' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'I1RMULz?&JnA4k|-UN* X[GY!qMkFW:Z3dF_ZxWvtF7$D1Q*<%AQ4BExoc=XXIYV' );
define( 'SECURE_AUTH_KEY',  '%T3pA1kiVW$M@1R$fu~D4FY;Xk4I^UySC8mhbrsPf;vufT%[=NruM%8<XcUcbE/H' );
define( 'LOGGED_IN_KEY',    '+D5-GQ!v,)<FySJm].r(/-NeUMg..~b_wk@BzS6?jM[qK9C(}9 6i@f%cQ]PO7s}' );
define( 'NONCE_KEY',        '/I.WP?0]*g(lZZ.p8+xC4voeHIwv%scIyjD30Z]bm6%*7/r.3YhiRkT{UY%B:5[u' );
define( 'AUTH_SALT',        '`ws3@J-^u)/$r/BlL^B~`Yq=]X9PbL=^GAm7>ODj9DO(ndRN?GGgAu$&+ d0)wsS' );
define( 'SECURE_AUTH_SALT', 'vbiG`!Mn;2JA o=D10$,gyBP+7:Gl>b1CjxjPb:xkMo@o=dd@Y}stlm~fN@niHxB' );
define( 'LOGGED_IN_SALT',   'MW]|ChYGF@u<KdF(5M  h.L1N{$B=jtZ],(.R~m{R1qmIcYj3c!.<T{qEDLAB0C!' );
define( 'NONCE_SALT',       '[yqv&4/1|*U1u2yhr`5.*F46*QBR5AvdwrKHf)BjQM5wv4-.`[&s~ WTx,5n93^h' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
