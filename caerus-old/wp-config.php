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
define( 'DB_NAME', 'zgc_caerus_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZGCTechTeam@2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/*Remove FTP Required*/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&Z:4m~Kg*~OoGB/[:,/z32tk[0d<E{hF[b9q_t8ruxhYGlq|f~TZA<ySA:&D^1FD' );
define( 'SECURE_AUTH_KEY',  '@*|fs/C:KTDaERU)<_1:;X+$bav^ZDU.@xZ_&L;Vv>%:;qw-P},;y`+t!_r.#g +' );
define( 'LOGGED_IN_KEY',    '@Jzl>(oy!&S&W+l#|hwGi@EfrLEd:?(<[{nuJ}?x/Fi9D}Wp*c,asdK8L4bk^bsh' );
define( 'NONCE_KEY',        'S?qV$1xe:|lt)Gi}UIa;D[(:GTuZ7OXHsgYU84f:R1K&Xg/h6X-2P+yA]^5Szwoa' );
define( 'AUTH_SALT',        '/T$Mf~]bm)6|Y)e4]!C.OwMEfj.34A2Ccu7-JjM!4>EF&&Zc_sU%EE,<NE)wJ+5*' );
define( 'SECURE_AUTH_SALT', 'kXc?j2-lh/kWaFAoI;[FMCobI/mq@EJU5NrWvL{PMD a /:-a @(S3DL{d~M@tr1' );
define( 'LOGGED_IN_SALT',   '2lWQbBuVWdDCQXX {tb0;g$[wd1Om!>Ar{>w6xD|*D7_%G;5av+CPlCEH?5~[88k' );
define( 'NONCE_SALT',       'AciTPd=i~eqf3uY|y,bE3Gh`qwNlk?1jJ8#_RXbMw8ucICpPVW1~!r@yYO@Ba/qL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'caerus2020_';

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
