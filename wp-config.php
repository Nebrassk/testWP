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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=c.c}$#+M6Sm:T$p.}?V*F+(CF#s~;gy^bn=.qE7awt63[Y^M^s9wP](D,_(H51o' );
define( 'SECURE_AUTH_KEY',  '343p^_.g@q{}Gt5)H%$dIWnss<lUOm>~q;4OF#?gX/r13KJ+/DAIMoyN/N?r&[QQ' );
define( 'LOGGED_IN_KEY',    'OC1x<J ssMrCtpDl10f8yy!o} )n(8U3RVJI=>}$Uusf(yTxC/tA(nPCug1b?=xr' );
define( 'NONCE_KEY',        '`9]YF[![u6s;oG,^q5uHt8 9GsMBC,MC^bp}=Z{F{AackJ|TZlB5wxxF4vi~ycQU' );
define( 'AUTH_SALT',        '[_/Gk6<*^h_Hm>M&SbD2b4N%_qtC/?|5nB#w0C:6,e,7Uvc%%1>:ut^(JY293avp' );
define( 'SECURE_AUTH_SALT', 'vKjmhIY^Bf`A-SDXSVL?*}DDh&voXU?&-V|M46L2)n-R8O $JAFZED>[}#C8PnB9' );
define( 'LOGGED_IN_SALT',   'p12Q?K<!$h,;>ys75dVSQ8OZ0msctb&g3tW.VSKo3t$A-<l}L0otYkO>m%&5(=o!' );
define( 'NONCE_SALT',       '7<C*Zt3uyS4h%!XTccfzmOnaH:KmvSsYnVb}|Jgt*@F}+#Goc6>]!6T1mq,_L{e6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
