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
define( 'DB_NAME', 'wpah' );

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
define( 'AUTH_KEY',         '8J%-w|G/RdHvsWOBD#[+EcrRLkd:x/<RWs}xjn@,p^Eu-7/6>Gpx9Whc1_vW4vMN' );
define( 'SECURE_AUTH_KEY',  '~kNWgQX3>}+`Uqh73g~Tv5Y2UqiZnS6qnt rnCMt&7AJjb=K|8zj#EcC7W o]:wx' );
define( 'LOGGED_IN_KEY',    'M9?NfcJ%rK^|jVD737c]R)?T!@Xp)`+=#O1Ky+BogE~b#iheWG1E)1|3=x4KRN-$' );
define( 'NONCE_KEY',        '[sKN@3P^iV[1P;K ,K1aVQbhPD$rd!XiO~2TpC/BIFgT=x+o@Tj:rOYVqA~rX~nU' );
define( 'AUTH_SALT',        'T#s|SQVWH;E^5_=-wZYQTo)E;,08lw|52M&<Hu(soy?WkwG+U3ulq&55|UHKRZ_:' );
define( 'SECURE_AUTH_SALT', 'ogltfK;SOAAU,;,jD{]I,l0sm`pFX>hNXmm&Bc$zVE7Ai`L; @|2|$kp~Scp,u;:' );
define( 'LOGGED_IN_SALT',   'Ti(x9Pp KiMP>mX_E61;crezvt$io(sS)Y_3ptKWsA1T4Pg{;7[93usS$;;D!@gl' );
define( 'NONCE_SALT',       '{R$#YgNa~q4zI06> So5@N`%e.E@Nz,Fo-BY4+13.!hy_u3&JnsYhK+8 Mfqsp<K' );

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
