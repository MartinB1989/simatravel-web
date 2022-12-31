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
define( 'DB_NAME', 'simatravel' );

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
define( 'AUTH_KEY',         'Y:|F?o#;r5PbAa}i|]WIXu0W=Wf.3ETGQ8S~_a{zslmH$})ql(fGC&ZgL<<f%=I}' );
define( 'SECURE_AUTH_KEY',  'zErddT!aKNw$tW+8%x7Yr[%-pWtgiJyd6^5@E zS=yZCHs2!Z]@&,eD@-w1zG%K6' );
define( 'LOGGED_IN_KEY',    'iC:W[M[6)haZ/}l5:q!:!L>4]b<.wP>y^`WGi!)-Yq8[sOgs}LD$R9?#bGma*?/1' );
define( 'NONCE_KEY',        '=|#.;N$/jaSkbz.yGl8&cXw4ivO1R2h29<f(toW]N %Y,Hf}t3cC3ZFhzc I=7|Y' );
define( 'AUTH_SALT',        'DU6h0,)W]@,>4++esURdjks.[HGTjmVV;}Q)Tv2}D|.FhjA`Aps&,X6w8gNsd d+' );
define( 'SECURE_AUTH_SALT', '-G:5Qm[)KO$WAq|kK6/cSCFbkEN@myJk0il5:d@p(*f4M_a-w)uh$.5lB@`hW3Hf' );
define( 'LOGGED_IN_SALT',   '&K]MXBtcBwDM5({IuF/;;|K-MHwfkU2pLzh;.E&~3bW,pI@FeHRTh==wk,QT!K*A' );
define( 'NONCE_SALT',       'pHw[TO!w@my2lq4f407H&sl{pJV 0~hhn<& Kk~dL!|{sPf<B/ULZ~+mZNynKVBL' );

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
