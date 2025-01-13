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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '~VcVF^vdL)A/u`ee!(mErDCPJIpNG%^0s>H1nWH^F?J!JNY-rF,:88x:q5s}Bh_]' );
define( 'SECURE_AUTH_KEY',  'HycV5M!X-ZF=#m<iU{qoP]b3FZ?_UT{1mT]O0&HF{W})umkD*n]Rmd30,6DE%(=J' );
define( 'LOGGED_IN_KEY',    ': *o:_spmCmY(|KcX-r>dE|IjUm)^#*}IhwF{~ac:6kl:s<AxMU]W/b`1WCWnE6:' );
define( 'NONCE_KEY',        '+tC3t(y*D;8*2P%5)3sJ5`RM&3NXzKb?Ed-rfT5(Z HJUV?W0-#m3aI9tysxBNxg' );
define( 'AUTH_SALT',        'KY/T$R>dYNg#vk/!Svox|jAFbl*E/{RWf_7vE& (1 L*i;w3{&Oaa}9bH{ZMv:=J' );
define( 'SECURE_AUTH_SALT', '>90l&WvDiC{0_69qwR2&`tAP[m]JoR|1yI]c2*^Wu}M@7kWs~npFGW*|]*$nQp2a' );
define( 'LOGGED_IN_SALT',   '>vjR>^0P5Y$hqvrg<bg^b.rNhDR:*)[V]-<29aK%}^ZZ{<tN Ep]CJ|=*d:=l?p!' );
define( 'NONCE_SALT',       '2Xl_x7F~=m l,ERud,*u*xf.TEv9?=26t074CLRJfjR/X6en8~)t2Yr=@:]<qby#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'saurav_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
