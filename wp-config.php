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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pixel6-team' );

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

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '0%hmN3xP`LI<1ptg}n3~=:F1/-Q*mnPuJK,pe=$&Y<k>u8P]:Y2%b%xeN.3=?HEc' );
define( 'SECURE_AUTH_KEY',  'U=_J]IxTnnr^q$dg!*K&HD*pPj} U{z&=b_ZggxbXK45@W1EePEkH-HDxYn5z?0i' );
define( 'LOGGED_IN_KEY',    'rg53Hf,DgzGGZ#XY5d%QLZ>y*RM$b)WCae)S4(_yhP`iF3K~xM*K->lP(gjL}%3-' );
define( 'NONCE_KEY',        'sF`H<mtQt)e?*pu`d?>,K`8l;.k?F,lukP}=DdEbp^L=;(VeDKb7,#&:spgdHoM5' );
define( 'AUTH_SALT',        ']}sW|t>?e@Gb2_`$Ot9^twSH`36hAR})W _5#6Bl[Kka1)[UDm<m~z=IL7!aKE6U' );
define( 'SECURE_AUTH_SALT', '}34A.Q* Q,&Pmmb)b]g?=K3*$aBe;Afj&+:xgSVzh6~;a1IH6kUW~^ (:p_/6ShK' );
define( 'LOGGED_IN_SALT',   'D^RKUD#ss)laDL4-gxljpTtjO..2Q>*%}s_+]`zt-Ht K-gw[-~>UJF1nU3j/!;T' );
define( 'NONCE_SALT',       '}w3}n2mlW/h`_g$bm2 BP8!&e~>$TA8MLsn!gc}4p.+|+v`wk]O=n3ckJR[<~T/N' );

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

