<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'u307457965_nstwcar' );
/** MySQL database username */
define( 'DB_USER', 'u307457965_nstwcar' );
/** MySQL database password */
define( 'DB_PASSWORD', 'Ha*JTpi941]' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'krQOqtTr9QMLwbaYrsnTSBGZhUT8fvphAqf2Gnm/Crsa1Fvi2QctLXq8Nk1k+EWEbIxcJ4SAYTgOTuNSTMOqEw==');
define('SECURE_AUTH_KEY',  'yOGG4OkaA6p+0fiuc2MnOksHiDTBjCruRjidUfqLqWDzE8iTb0txaM54pd0D8hLoO4ty60560yrYOob6xcfCjA==');
define('LOGGED_IN_KEY',    'sjILpsUnEtUMsajb+Q34EcqcZBaAzXxcMjPuX/vqUW/s+zimfSWbuSkAEf2rVnP/oQ0gFQlSYwOv3IcoXTz32A==');
define('NONCE_KEY',        'OPbcLuYRgfkpxboAFEIVINu96IyP1U8nT+X4f30ksll0c7hHzNHWo+A3rhYODAYTziWu8sfwqSW9DaQ54h7bjw==');
define('AUTH_SALT',        'UbB/3FIaFk9eiyKGUxt7/NxMYOIuw7a5oZGV3JqV/1pZvQHxpiF52ZEKFQIRabLQSvd15EeyOKJglqORo4gF6w==');
define('SECURE_AUTH_SALT', '6tqvbBjG43Lmnr+eDc0Lz0m1wtUI0M0xd9HQzGD3P3JNTssrT84FClB05na9DOmdSWxUudB5BtHpfA4NBwCquA==');
define('LOGGED_IN_SALT',   'Da+KIUsaAQLOcOeiLtWzXQPV4AwT7jnbn9z77fREAYRiHbY0P8Bj7K6RunbjI9zUEhrniHgb/Q1VfZLWM8SLig==');
define('NONCE_SALT',       'bl0dlAKjvBEAKUqpbo5PC5rEb3L8hfIIY+TG88a9MJfUYn1BDbTvbtbIvLa7BrF0Q03Xzk53Rrx44/BtqWjH8w==');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';