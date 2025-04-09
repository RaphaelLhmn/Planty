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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '(8*:Nx()zNS0-p83`N7#.m&MPcC&nnM& O@(;5J?hB;1Y,>%opJ?wvIgUO&@BgSc' );
define( 'SECURE_AUTH_KEY',  '^)Ldac*zEncmY~##(SLBWenlPJuM*0-ZEO(1 &Q?G|n&7.)l&8hWDCt.*>:k45FV' );
define( 'LOGGED_IN_KEY',    'wDb7}T* z{T 90[VV?]V.2f/&:qR8*F8i~{!|&x{Rq4/m7]0~Le;z1wS134(m[~[' );
define( 'NONCE_KEY',        '|+-g=k]GAD%ze:wNa`cGg0_iGmWiQJqa,yTQ@bEqSS+$YNgC_](v2#Y{I?9M hEr' );
define( 'AUTH_SALT',        '$]1XlTa:7}+uR5M`R:LTiYR(7l7+uf*bV6IJ+5)T qlkweYITZ5Au qp;!}-/ oV' );
define( 'SECURE_AUTH_SALT', 'C^E#R;h,E0],F1LCYU.fa#bw>VO*cd);ogJKNytRz??0q8kD;3zk`?K=AmSc$qvt' );
define( 'LOGGED_IN_SALT',   '--~z N`GLj= IofzYY+,.,gA~1hq+[Q$;hBv1.a^nYSO{sbJTnZ$+DC[.l#AH-)]' );
define( 'NONCE_SALT',       '-`+WED/%=Lt2%Q=:y^H`- n7H]/j&>vCNjc-Jgh1z|`tC<*h88h(Q3h6Jy&l;V!A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
