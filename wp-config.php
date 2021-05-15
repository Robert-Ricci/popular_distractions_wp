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
define( 'DB_NAME', 'popular_distractions_wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q7jex2_3cqXdgzzK+-}8a?rH8vQ87b|#kTm_)!pOs:GAp8V9[6>h,P_{bA]m_O>t' );
define( 'SECURE_AUTH_KEY',  '3m_H3pbB9s0!%z$u,$T6-@,+Z[D}`e/+(.-O07h<Q/P}tDqtfmH05]-utN?g2Ga!' );
define( 'LOGGED_IN_KEY',    '0Sfr9}NpSRj-/flMUchBjKXs`~)StfN6+%w:(i=F$G#}Q^}RGcTidUBIoU-m+6II' );
define( 'NONCE_KEY',        'pxn9Vi0hmj-nb>mcUpI9FI)cgb|v=~wMs3 MZXb9hjt;4^SoK%ojkO<+0J N`Iun' );
define( 'AUTH_SALT',        'O`c(4u! rKE}b3J=Y-dGS&gcx*P<Id%L%.>QanUC`y~9<.7Cd<+Oa] z/u=lzUvX' );
define( 'SECURE_AUTH_SALT', 'b0:`2Xzr2Bwew$>8KIz:2rb)^|aXlwWD$EFdmybPbgg|tvYZ+<XlCJ_}@lG,(Z6W' );
define( 'LOGGED_IN_SALT',   'aJk*Xi|Z7kmFe-W]qs.tOVRR Z:H9DXsRrB&47!7UO6n7TN~Nv2@|S>ompU!mX}k' );
define( 'NONCE_SALT',       'rs)#JT^CiaQF~&`9zFo<?~^ow[qA)DiG)_3Xsx=A72SpIB1U{KwZW6JSZ`R8RRh$' );

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
