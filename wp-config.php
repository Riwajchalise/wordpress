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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress123' );

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
define( 'AUTH_KEY',         'i3;)6b%-lv fot;d5 M;f),yKmL-6~C6F9poq]prcOUqB#$:[5z!X}uO(kArNJ}s' );
define( 'SECURE_AUTH_KEY',  't)^${?bFU>Sf;V=i?]c ^3g4!j/Otmq7F/OZb|taN6c~=[MG9N}R(1qQ^T0=gDCj' );
define( 'LOGGED_IN_KEY',    '+]#fg43[jKS<xSNwP$!r`4fNxhq0L:Q4pYp_-Y1k=f/GRWQGf?-AZQ5|z+O]N{O1' );
define( 'NONCE_KEY',        'Hcy1Y7^ sM,8}5}#W5J&sL[Fi7rSOlNkz`suH8+a=B)B+WGP6dWpzU`c{9K{@Z99' );
define( 'AUTH_SALT',        '`?Mq@9=s&3%2L8rRQ(h;tKaTUnes9C7RF-OE|aOn+jLaNT=,Z%AmITU)5*]Gh6L=' );
define( 'SECURE_AUTH_SALT', 'i>1pQK 4mf8~/I7%snBX nkAl#8aO-`Hb&$Aw/{TWxN>C5AqY7VmJH8z5QZOHrgQ' );
define( 'LOGGED_IN_SALT',   '>=#}@Qt wm)`+~Ua7Lt>WfXvzaSv12>RH8%(0`JW06*ML}>K].=,W6M!|,,^[h)_' );
define( 'NONCE_SALT',       '9/LFO=_tDAq:3{HuLAbtEjyw2iPk{w&&-{#he|}LQ!cg0gHd+^cuf4GVQL.BR$ko' );

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
