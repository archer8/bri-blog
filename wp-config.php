<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bri');

/** MySQL database username */
define('DB_USER', 'bri');

/** MySQL database password */
define('DB_PASSWORD', 'MFHzy87F3JPpzxB3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm{uU:T-=y-2zELr~i-rw{`QS0k[-+{!, 20/O$l|G&k#,g#UAAC+!`@<%ahuBDm`');
define('SECURE_AUTH_KEY',  '+p</L5cF_[R73(vAzz-u f[)f9oq7x{w)n?qK+YiJ+*e0N3`o+xE/-~Pq9L,}$w>');
define('LOGGED_IN_KEY',    'P;.rpf^(qo/;uXnU$?K18$777G9(Sh4rI)J;%t@E%W6J2{sg*R2SV]HGVQDSAohQ');
define('NONCE_KEY',        '0iy|oswmmA^iwDHfUnpKWFg}=ofvHP#!Pt;;`cflVF@J+x;T^p/f5q`,+H^;&VWy');
define('AUTH_SALT',        'l@@W*V8S$tf{rWA7P0wLt:{zEMp<a3 DsjkKq(7i-oTMu61+8J`3$G-N/,eeA>{T');
define('SECURE_AUTH_SALT', 'O6gn$h;`{u|WZ~?7fWiSH(am-c^NRVE|(dG&L{pnp[d?K%L8-~nj8x61AF:~!|!i');
define('LOGGED_IN_SALT',   'JaC~F4v*6,06!:zk+1e|oJdN>NV>QcF$_R`wSih.Lera5)R]5A$-bm:LD`ldV9jT');
define('NONCE_SALT',       'fCtWX`LVC|~W?GW-D&XVzZU-vmOq6A/IE|P@N|^UI/M% pasj.v5]^cAYTQj{I`n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
