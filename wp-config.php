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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '_? IN8V]ek#O)u5{I!m`BZsP/}n$w?H`R%ub#;J1) D~W$]Oxe+dSR=ut%pxp@>Q' );
define( 'SECURE_AUTH_KEY',  ';AdRE|ZA83ZK#}//dRxlkWIK>05dBJ6^;_Ijbr,yX p[c,X_c7sZn(s.&X8Jy ]B' );
define( 'LOGGED_IN_KEY',    '0XY{L@!`UPZ30T[b3!>r]PCE5jMu&+Ki[En1`k2},MGj?kv6vu}&K2YUQ<]}jNX^' );
define( 'NONCE_KEY',        't/td*Tm:m,ZrM!~q:Mo8E-x_qw`j[[IHjA0] CtVe9~bye2oMxLAIZth}0@A8%WX' );
define( 'AUTH_SALT',        'LOvyjFnzHcY{Q}a9`6Lsb7+CauDejDeQ!OOzQ#zxKk[;J4Qq>Prd>HkhqCbKlOqC' );
define( 'SECURE_AUTH_SALT', '<3~m|B5kwE~7Nr3#xpEv8xzR^~5hRw!8v`XV;6eWbjAK*?NZ+Y;+0Zg}C@#XDMzE' );
define( 'LOGGED_IN_SALT',   'R|u.Zn>6#+@dfW(F$c?+3HlcC.RtYl8GT//.8x%A)yJHW`q4zg-NM+sl&gqCD[f?' );
define( 'NONCE_SALT',       'Zv1O;l<kFVCQ-UDwn^R%>-wBwv%LQ?9PZ&F)`0A_Q>J*Yj5Q)Topm[IQ^H3|_oqh' );

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
