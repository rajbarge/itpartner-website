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
define( 'DB_NAME', 'it-partners.com' );

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
define( 'AUTH_KEY',         'p}^K7[g1<R1|<Z[J&cooVazqaYzqkXWQQpjMg(~iJXMYo^+[db.QYw{/f=(Q,nP(' );
define( 'SECURE_AUTH_KEY',  '{-b#+IBfED/IaY]H%_8N!t`z@3B&QXXRU]M2!UiWdHO`{EKXs^`eeDLI^[6isOuZ' );
define( 'LOGGED_IN_KEY',    '~x`/n>Tq1I0eW6:)X7uwd2(>K(40L:`Ti.:}`uU{/P~9o;7796?tY3m3|OB=i-U8' );
define( 'NONCE_KEY',        '_w$y9G/b*Zu8{$#v-umUdk3woc4Gw%xI3h5=Tz=VPIg7PU?ql,0qt&~-uU)_(Nk[' );
define( 'AUTH_SALT',        'xBiDgaf+vPQaihQO)a(dKUR(eLU_`%%:V/62bp{%w>e=k~R9i0Rt:mG~1_+ N||L' );
define( 'SECURE_AUTH_SALT', 'H@#X%hT(c,{~Pr/0AW5.iHKW_&5?,hv)6uBE*b%>$F?rLmRoZ.;YB{ ppE;{+EBP' );
define( 'LOGGED_IN_SALT',   '5^L* WY!%}j95hdOQug{N4%y3Iq)bTh%[0LC`BCS-ShICrXN/ZBP*sN@xi].|hPT' );
define( 'NONCE_SALT',       'l:0OG[QU5f1z`V#!ONQ9yYA+Vs ;}QQ0{&6sifw~p6BMO<bb):)!5<c{^!nZr@PY' );

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
