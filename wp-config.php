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
define( 'DB_NAME', 'vito_wordpress_bd' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '5438f72720ce0af3a1eccaec9061d811264770ccdccd584d' );

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
define( 'AUTH_KEY',         '}X;i@ 1Vy}``n7`]F+%=1Up6]5~y:;faOLt+_aHN=c8uZnF)=V=(P|,QiyT5zHg;' );
define( 'SECURE_AUTH_KEY',  '=te{xN&Q!DJ?:bG(Yk[Q#zvlpq2+.>L7++@1J~PiSZX0LpQv!w`@b^Ms5IMHJEio' );
define( 'LOGGED_IN_KEY',    'b#wh:VDzXroW!kqM^DdyMBWygVp$&,>G 51ENIdS0{fBXq7/Uf`q(; `jBG?73r[' );
define( 'NONCE_KEY',        '621a=/CR1a2HU+np5lA)FP.N2lyaK*3kh)mOHu$[j&)Lg89p?i1r)Yg~QEPP@aHy' );
define( 'AUTH_SALT',        'qcoDA!nu#Z#Zv/^mQn_dr/,y5j>E l@<I;%GrA9AE2[Va|+XN+PZmUD!JnJkW|F;' );
define( 'SECURE_AUTH_SALT', 'Agm7dB+6t?!!3W#,|Q|m^buQ:3:{c)uOtgV1<{9]E)fwp?-y*h4L!AdX8hg t/)~' );
define( 'LOGGED_IN_SALT',   'uNr2=,%25S|b*QRe[m&FHp]#hOFKp-=` _JBzM~,3%E7vbRelcME6syRM~oKdUiT' );
define( 'NONCE_SALT',       '8:;(`I] x(~uB|dp%LKkO*kT&4DU&mlr%JIu`uZrir}/W!ABoByIv=mR}:JSBV[1' );

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


define('FS_METHOD', 'direct');

