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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'c.ExMVoG@!f{3gc V.a;FB^h2lu1F/,,;=KM/ar7^GoTyXN:@gVeLPKj;vCh#)gD' );
define( 'SECURE_AUTH_KEY',  '!<=KL{J +Qw)/+nB;^S-OhdUCQJBc0gszs@JfENQ3LNH;G-rw;JMRJ5`K%qf-Tj~' );
define( 'LOGGED_IN_KEY',    '1@hpa0bDk-:)]!^6`sVk30NWT/>N/~t)x,uA*tb]MUH#*y;KSKuzC:liY8QnZ[)r' );
define( 'NONCE_KEY',        'dO<N+nG]_.EWKmU/yYK>~@!tQPsbIH|{r%jH#%FU/Z#xUC{Zlw;XQ+D<?MO1.XGE' );
define( 'AUTH_SALT',        'G|<[]0(@@h)~gF1<.,335TRT4y0+Yz}/_Ga0-pV-uf5HC/MDWY~70ze4JqoJm<&w' );
define( 'SECURE_AUTH_SALT', '%xt+2 R-,c41*^8SZ3n<%]*[P#0RI:#$m`Cf&sNUrOcIi,@ #x!6Fn5l7+RjI&mh' );
define( 'LOGGED_IN_SALT',   'dj%-;L<8]:P&;}<oUT$2G>i jz:|TZJy4SI0;-61xa*Kq(mHbm@Aa3rdwfA0F^T+' );
define( 'NONCE_SALT',       'y/yM8=iHc=!Sd8N9k,8RPNO;=frW6b5)ySG)P%}%tb`C;#MFm)<F+7 <J3vzuij@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
