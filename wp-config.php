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
define( 'DB_NAME', 'radikal' );

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
define( 'AUTH_KEY',         'v[h-Qqq$o8T@Y-qE_2Sct!%|>cZRwu?,c-Xhq!H0,Iei+ETiQ{+;r&x;Z &oXk+D' );
define( 'SECURE_AUTH_KEY',  'Y=IbgLvukV6r|C.ju$J.@O}zGL)/oeTr3 ]uxCxbj?<ZCHJ+sf^9Sy)b:h,/c^1K' );
define( 'LOGGED_IN_KEY',    'G/6X/e4lJIJP]F$8p4sn2810isq5jA#Xh17ru^Zve+Ac)T|HR`Ma!M?)>6.u$C^%' );
define( 'NONCE_KEY',        '9/:wHlbQCbduuQNfTx2X{jFShlqYh~Zn]bo0?8%T: Q+>0z<;%As-OiPnjltQ%u.' );
define( 'AUTH_SALT',        'ykr&g2LQQKKIP4@B#[u&9e7oE:Zv$D3)7T$EqRWOJ[{MsQ4p,&vS`bz(#tZV9H8(' );
define( 'SECURE_AUTH_SALT', '7qjJ >hus6t}/oC?}-<ar5.g_$G+mJQzd?V!:s~NOxu5aBxWubzbk[vsA _5w*yr' );
define( 'LOGGED_IN_SALT',   'hsxlYIY|1Q%s)wbJBcmKlyi 2)I1J7HO,H<sxwo>JYot;d9k~Ju];;09wJ:pO#uy' );
define( 'NONCE_SALT',       'WhcGkZI]<<RJ9>9MOli_Rr_haT{f`Tc3f!Y=<6{.y{xHFeFD<X$mdtw#wICBg(a5' );

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
