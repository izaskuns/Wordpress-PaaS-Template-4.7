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


/*
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);

//$mysql_config = $services_json["mysql-5.5"][0]["credentials"];
$mysql_config = $services_json[“cleardb”][0][“credentials"];
*/

// ** MySQL settings from resource descriptor ** //
/*
error_log($mysql_config["name"], 0);
error_log($mysql_config["user"], 0);
error_log($mysql_config["password"], 0);	
error_log($mysql_config["host"], 0);
error_log($mysql_config["port"], 0);
define('DB_NAME', $mysql_config["name"]);
define('DB_USER', $mysql_config["user"]);
define('DB_PASSWORD', $mysql_config["password"]);
define('DB_HOST', $mysql_config["host"].":".$mysql_config["port"]);
*/
/*define('DB_PORT', $mysql_config["port"]);*/
/*
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', true);
*/

define('DB_NAME', ‘ClearDB_MySQL_ISG’);
define('DB_USER', ‘bb2d4cae1af7c7’);
define('DB_PASSWORD', ‘a759f5cc’);
//define('DB_HOST', “us-cdbr-iron-east-04.cleardb.net”.”:”.’3306’);
define('DB_HOST', “us-cdbr-iron-east-04.cleardb.net”);
define('DB_PORT', ‘3306’);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', true);


require('wp-salt.php'); 
        
$table_prefix  = 'wp_';
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');