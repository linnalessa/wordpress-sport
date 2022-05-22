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
define( 'DB_NAME', 'labb2-linnjonson' );

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
define( 'AUTH_KEY',         '!rN48k|6{hqocKACS4nKFbO:CTl|M2v_93sG<MuSi^*7Z-^%0X(+Wb8dnhLlrcT[' );
define( 'SECURE_AUTH_KEY',  'x.kg1^7kM.GcvY[ %*$Vhg$Iq2JRrCYDW0$ P#+%_Ww`{Odlja[.p9Z}<TgZ3=^/' );
define( 'LOGGED_IN_KEY',    ';Nk-c(s}}EJjEx.uyb!J+K1[{(kLi3<k[njg2Lj4+U!3r4 P*lX3-KR?Be1>vot1' );
define( 'NONCE_KEY',        '9?@Wp_U Zb#/+}WC7h}G%pCuc2t1$8P@OIEJZw0T<L}JVow-v I%fo,g$k{G(ulc' );
define( 'AUTH_SALT',        'M$vr0`bx#kkx9z_;rzQp,3AoQ(Z&Vet<6QWC1 @FL[fT)P)6d_m=C1i=^7Su?ib>' );
define( 'SECURE_AUTH_SALT', 'KlK5i,Q};Q0Kwo[yxtkCv=j=aYN4TDCUgyP l,Net6/0dPeyj/7nmXnVOCJLoE0J' );
define( 'LOGGED_IN_SALT',   '{yIee|*HEXWX|4Hb2Gb@L1S/|0rju=Z**~w#*3~6sY_tuNk/Iz;lED+f,m^dBGY`' );
define( 'NONCE_SALT',       '}{kye7QCp=CB/[Fv%Aq!4BUii|p8}1(~![?O;!#f= zX >,uz}*9^#^DK~]7m] ^' );

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
