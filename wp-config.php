<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress_b');

/** MySQL database username */
define('DB_USER', 'wordpress_8');

/** MySQL database password */
define('DB_PASSWORD', '4L63xqpU$T');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sj@ZK4%D7DAikx7CFXa(9AWzv(F4tpUQ3CFCfTMDy%qp8qi0Em1eTYtsh!p5h&2c');
define('SECURE_AUTH_KEY',  'semTM)%MVlaZruK0n)Xl19OMD&*rJ%a##gEpH3yGnNvc@lzGzrxiZ9BcMKscml&Q');
define('LOGGED_IN_KEY',    'dgUbUpIceoThM^xY%S!VJB%pHFcxS1$0xisu@&SWZ!iPK6o8^5sI6lwG9p93zkFD');
define('NONCE_KEY',        'p1J#(HeF5Bfslhh1xzDhxJsqKMO#C3gnShDkF&q0fLREAI0p2D0sVgk&lVXph2uV');
define('AUTH_SALT',        'uNa5lE08rzw^t^YjJ&WXsG3aZJASOUYc94QXYgCrQ*EyeytXC&CIgtVesbMGyHJ@');
define('SECURE_AUTH_SALT', '!jCUz%X4If6!u@oYUVp^2vA8rXFk@wyeH!6Eko5&98q7)iPKAcamhpmyF*dEx2kY');
define('LOGGED_IN_SALT',   'DO1ByMC4il2gqdk^wOhNrHd2NCd1$uK(s%C(WqbsJuz@Gf9Mw9R$WCNdiZhywIWG');
define('NONCE_SALT',       'MPl9feUkg(0F9JQHGG%qgq)*F#9pfKEx^P2lj&HC)!F)*Vg27qqm^^!!x&0tx%5F');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
