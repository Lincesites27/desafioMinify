<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desafiominify' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K<n,WcT-~.L&;bxl+Dv4=|7V9<c8AE>A$G_TrOE:o>Y CZ|K~t)_R3eF!#J7[[Nn' );
define( 'SECURE_AUTH_KEY',  'l&+?A;N[OuW3H<T![hxU 8WegT:-;t{r]Zf6xUaoH,ao(=4NCA{a95JG*^ZC3[aS' );
define( 'LOGGED_IN_KEY',    '}mfd}|wvk/mxmsIVSNVc/fv|ZU ;.Y=z&J5Uy8Xe33JEhXnsHIxxQlE~0RshckfI' );
define( 'NONCE_KEY',        'YB=pfdwQphR:[(,BD~c]iw+|ByW?b931`}9o2AOrv]!M#5E26V<y.EKY],tMCGZq' );
define( 'AUTH_SALT',        '`]K>hn~>?]K(W5E94._} m.(Oy8w>dw5qrlB$/PCgU[_w10OI%VvTp#d{#t9)u;C' );
define( 'SECURE_AUTH_SALT', '^wcMA3#+=A9e1.L[1pFX~3j440%4n5-VnnsA-jsMhxYK{kp}i`,jJ`4%(Rp(WaH<' );
define( 'LOGGED_IN_SALT',   '>tRw_]ZWM[$s=gvsBTbJZX(fKNvf1f$$j{7zpjojXO4-S5SX5REl=97Sxs5s4H]X' );
define( 'NONCE_SALT',       '^3VHtggP6vF*rXUq$4)Fa!) ~^ZN`B0u<}gRnQDpEHx^)~bWg%@yAy0m vF5XO5S' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
