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
define( 'DB_NAME', 'idstu' );

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
define( 'AUTH_KEY',         'klAM-}m)]$4l=%-sW6hT.0P68xUk.K{m@zlBt[Umdx=k%+F ;um$:n_Aa=7B^Lp8' );
define( 'SECURE_AUTH_KEY',  '^P(qnx7{wgk&}=Peo*w._2YEqnfYJ6G_?%_%Ll[es_}E([,zNF-xrlGXNm+a>R%t' );
define( 'LOGGED_IN_KEY',    '9=Qbh35D3AZjs=b|^3fJaj6(v-,%VE:`D.h}i?G#k;$HPgA9.w#`&w[_(BoL2)=0' );
define( 'NONCE_KEY',        'iD7RZ,1=5A-[1-|c66c|@vXKHdoV&E$S&,b]o$!mL S/oO~oeHsFPBqL9>e}[/F`' );
define( 'AUTH_SALT',        'G3+UfVi`S0`Vw?8P]fa%a/Nzw}P:/rnddL^I1#6.SDaxCe?aL92nU |W~w)|4kUE' );
define( 'SECURE_AUTH_SALT', 'zs?AIT:}0K$kSnnSs&7jz@06KBsw]/gG{Fy3#yTJ3R).hX)-hE,ico`frk0(+f|z' );
define( 'LOGGED_IN_SALT',   '|cE,7:#+mVrt@p?MS`%.<7>i.T+6TY@9+: khR/0M9._,U-g=k{_o:~Y{C3 tvpy' );
define( 'NONCE_SALT',       'I]p Cx-&qZY3ztAR+d{6z$%gn8=c#owx8h.yiR:I9LIuC#>!]HIUr|~JV4o:}[.G' );

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
