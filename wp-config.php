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
define( 'DB_NAME', 'esikhupheni_db' );

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
define( 'AUTH_KEY',         '[TH{91acE4G5{]It^xhfd&1G)@Tv/Ec/U7(t[KDn;,Q<U6^9jjAtKd-fv5jyJJw#' );
define( 'SECURE_AUTH_KEY',  'b51#amn`1WXDQq1y?B;WfnIY=`5^u[ii4WdF1(Q=z-MUG>cDO5l05b0b}x|Xdb)N' );
define( 'LOGGED_IN_KEY',    '-M>#w$A6L%6D2uC/<<zlE/k|lDQgI4Ad={xdDCe$(N=_Z AJ/EJ}/RT+7aADdv~h' );
define( 'NONCE_KEY',        'G^{HD_J!kriw^,yC~]XRz%:`@B&S7v$J_jQI3YRRQ*>eEb!%H]ZWL5NhhX*}XkA5' );
define( 'AUTH_SALT',        'vICTv}63q:5S<SY:Gpm>ZE.iR@Dt1fJ(uq!0Esw#Vot.L_!sAc)@0 >1Lke)/Kgm' );
define( 'SECURE_AUTH_SALT', '6P912}p*;s TQh3>~jO5B2UgNj[wM6K1mS)ll2[ShEw<1lmcD^vb@q]{If-l+#oN' );
define( 'LOGGED_IN_SALT',   'M ut9Jz./>Hp/;c>lX}.1+IZpf1(]1__k#lIg}G4b@H[9rxpo<V(5tl))n4g/^%i' );
define( 'NONCE_SALT',       'Hk7OI.95Lg(D0bL9<RLKv3G@F!}Mzx#{D`UEevyMc9}LK:Ol0s},.j-mr1yqc_vn' );

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
