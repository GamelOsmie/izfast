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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'izfast' );

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
define( 'AUTH_KEY',         'IQfuHhrEpc&OM_9Kz.+2]ylI6r:-toT#LEY?,)W&;UrVTy81K(h|S@y/3,qF B(M' );
define( 'SECURE_AUTH_KEY',  'g&!~Z:j@N0BDNl;qp9H`gfrOkw #jQQJ8$dF Qj7iYz6bDS7ZT1od;RIylKj9nyg' );
define( 'LOGGED_IN_KEY',    'p}6zG;icYkBjH .Q_ZyxSS~Gy*cQgz@`M]$LmF#+_8 ^J`q}S8o887Pd]_92CYY*' );
define( 'NONCE_KEY',        '_kZ&[GUynfnp$W ]mFqmEuV215B,j`cIksRUe<kCfEEEc,bab1E}u1mdmKk2Sa@|' );
define( 'AUTH_SALT',        'AMddL3CX-TzlctFqqby,=@]8$X6oe&;Me kn^qNsSya.yeY7eNM<UUmQB/=~<=!T' );
define( 'SECURE_AUTH_SALT', '0we5;@e_ZJ,PfaV(ZK({r.[.t!IDOJ}^_oiMe+nm~ f2u5X#6Tp3(Rjlr-Dp@WV,' );
define( 'LOGGED_IN_SALT',   'a-{HN]AWmy6SoReJjPA_nH(8ZH]WA_+$c{)Y6?~z<59>u6b_g-X)k5NT7UO,O(G)' );
define( 'NONCE_SALT',       '~`.XZucMKGEkklmS}I>5.}_)2H]W~8p1M7[cVqH>iVKp=@@;VNFRV]Rj{G>vqu82' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
