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
define( 'DB_NAME', 'gym' );

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
define( 'AUTH_KEY',         '*7QQO[By[Gqd9/JM0M5d^#sKr.V]GE?$c1U<@KxDYNwmfDhoOlZC^1zW371LfL#=' );
define( 'SECURE_AUTH_KEY',  'k#CMCN@H{n2@p(p!^2v!P`[a*IHty=%?4%uM7N&~LV4HlO_p$MabG[kiFZ!,YxrS' );
define( 'LOGGED_IN_KEY',    'c+eMwGEd}iEFCA}*=3SVA(B{x1yz3>]ms_xx,ncB?6.J`1qIj7to|oHcxN1V-9b|' );
define( 'NONCE_KEY',        'o-2E<EvUh^WK-J]41if_o~4QXr;RT/C+-iI!/UP[v!=`${OUa k&ccw`6_XY>^8K' );
define( 'AUTH_SALT',        'Uc7qiw5]a2=cr+)aLlpY-v`x*Bcw@X;V}SmGII uk&FfX|o}zlwKZB|CI-/Uc#i|' );
define( 'SECURE_AUTH_SALT', 'f6QzRZIc+WA~*g0}(JT)KZ8Ahwd.,N53)cFXpPXIeV&g[2Ajo|$$ag}<w_d Y{@~' );
define( 'LOGGED_IN_SALT',   '%2eHHw&nx[fcf(s|WJ[W6.b{xm]`n`A:Che_j3.}3:r6IqVUdY9]giph2!@C~!,+' );
define( 'NONCE_SALT',       'YMScy5;)kV$lJUB7kkt`@lshne:7@+0l(26.LqlC5){hwK9/O.{k.0p],jBr#;{M' );

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
