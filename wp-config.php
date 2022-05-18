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
define( 'DB_NAME', 'jewelrysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'lWMaX=Zf@h{n36V2F`IE$jFs.m;o-bu,a7MF=W[]OkT/`rt8|F(50tz-6W/<p%6=' );
define( 'SECURE_AUTH_KEY',  'aIA[QvwrGEB@BZmd8iM6hhBP>-zE~m4ACjXnX7C4~@hHzz9o1ktat|S?vSQ~fh%8' );
define( 'LOGGED_IN_KEY',    '}O,fRX=*6qDC*ZC/,4;a5G8ilt}c$qg39Jx$0swu!}d%Ono{mS6xS-NBxv4INLsW' );
define( 'NONCE_KEY',        '!. AH2Qvk$S-$aPKQQ.Nip;Rw7lP,E_{h,:8?BF rp CXdAc)%L6i37}P|oZA&@7' );
define( 'AUTH_SALT',        'iTK|Tt7)/UGx;e{./+>~~EvE%2l|nI_ )d!=#,<qoqu83vZ?%vk^(97.zzTxtg+2' );
define( 'SECURE_AUTH_SALT', 'F>_1(ph{ZccX=mh >ulp%1f54r7wDpzBH8`<z]Hdu~q:;1c_Y)!?_45OyB^%HF#g' );
define( 'LOGGED_IN_SALT',   '%_?wDQXXn1)KT<M1e*G1C|;{s)E(]lG<L5sSZ:IY`Zz5HOtUy9.5t;ox^$lA,@kv' );
define( 'NONCE_SALT',       'Xh`c8Shc@a=(:%H:q=(2ZGR<f1yk4gJD,=:+`A0L,t>E%;A:yBSL)fI*:pYQp[^n' );

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
