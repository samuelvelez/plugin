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
define( 'DB_NAME', 'wordp2021' );

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
define( 'AUTH_KEY',         '%E6MmXU_}H$0x%GTZwd^@t]A)9/?tndRc=>)<R*[7qlAp<w`BcN9@M@PJucUJ-hd' );
define( 'SECURE_AUTH_KEY',  'f^|v.shBA2::{w,]nnXah4qm6Hb@>jcmG7infc|)fOQ>iRTnfJhZFaEZ<xs8IYvz' );
define( 'LOGGED_IN_KEY',    'q$,?NWhzvHWc>32pTAsNosxhZiT<U?w5FjP7,js,H8h<*vdVNW.]q(0mV1}6-~%_' );
define( 'NONCE_KEY',        'X~l|:d?if&<kGn@Xmhb U5SPT: !DJ53kY,d/#v.qF)qM)jfXc3M~wtz!nZ/>)h=' );
define( 'AUTH_SALT',        '-I]j5dz>s7]Mx%pKGsK>Sf4_2CgFA/qTUtjeQc|;MS0C=qDQ=c4! 9W.m|e5~bJj' );
define( 'SECURE_AUTH_SALT', '$$l-X[D-xT-D/R(=6_GR<SZ#|hT}O1vWG)J6B%::DzxK#%*m+mw 36)+J?X#_}$*' );
define( 'LOGGED_IN_SALT',   '@*#*.MFn%&fw<u]U_asF<KF8EfRh&}ySuKKxY%{r#uK>FLq%g@H>:v?g=R& t:6H' );
define( 'NONCE_SALT',       'X/QUL$e^nNehTx2dqKs-N(8+M`rua/)~wa,0F Yur]sQj^dFE[k(QE5u5rB]R<}-' );

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
