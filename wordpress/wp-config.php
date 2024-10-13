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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         '4{9O]{z4x7&Q7~]qt7gTDR DrzbfUb!NE6Q-^HTf_|c.?3Djz=H7x9VJA?LToKLs' );
define( 'SECURE_AUTH_KEY',  'I|.r$[jEy-X>ACoD(q7=ti`_rtql#@)+TmT1uR@Es:R`L)?]7d}y4(ZH|0h{U6z1' );
define( 'LOGGED_IN_KEY',    'OE_CcC#ul:^dvTv~BovgeN8W>1py~kCQ:vt/?~Wzx~1Yxd@cB{g*.)*v^3dApp(v' );
define( 'NONCE_KEY',        't/Ww @q-x~*U>rHmd/z6,)VL|TZO&@i+:#8+p/ZZ@[)K_1+B=5U*,.d~7:s??P!y' );
define( 'AUTH_SALT',        '*jg7.`Afv#1K<<-uxRfD9`n;8))#ivXGR`[h)hBbh#eP-u,YVGZ,J.`_JE$&$l?c' );
define( 'SECURE_AUTH_SALT', 'vT?yQtWQBdB}+ :@#r1R`JyJHd8[_jV0{d}%C>rP9k*%_vz+}xc24o^}:!W1>b?w' );
define( 'LOGGED_IN_SALT',   'gAswxpj.~bnu#yHEee]YeUv6HQ#8.b s4/huBjvA1nERA]_y*9B<)l/<i0Q/VvtY' );
define( 'NONCE_SALT',       'dvJ-aJ.Ri:!LBTFJ_^j;hohFNUzxU${ya/Awn:/}-;@DYBc)*fpNmFv0PKFm*7[E' );

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
