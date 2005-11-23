<?php

// +---------------------------------------------------------------------------+
// | Should we run the system in debug mode? When this is on, there may be     |
// | various side-effects. But for the time being it only deletes the cache    |
// | upon start-up.                                                            |
// |                                                                           |
// | This should stay on while you're developing your application, because     |
// | many errors can stem from the fact that you're using an old cache file.   |
// +---------------------------------------------------------------------------+
define('AG_DEBUG', true);

// +---------------------------------------------------------------------------+
// | Whether or not config cache files should be checked for up-to-dateness.   |
// | Disabling this will generate no config caches at all and rely on all files|
// | being already generated. Use with caution. Setting may be omitted.        |
// +---------------------------------------------------------------------------+
define('AG_CHECK_CONFIGS', true);

// +---------------------------------------------------------------------------+
// | The PHP error reporting level.                                            |
// |                                                                           |
// | See: http://www.php.net/error_reporting                                   |
// +---------------------------------------------------------------------------+
define('AG_ERROR_REPORTING', E_ALL | E_STRICT);

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to the agavi package. This directory          |
// | contains all the Agavi packages.                                          |
// | If this property is not defined here, it will be auto-determined by Agavi.|
// +---------------------------------------------------------------------------+
// define('AG_APP_DIR', '<REPLACE ME>/agavi');

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to your web application directory. This       |
// | directory is the root of your web application, which includes the core    |
// | configuration files and related web application data.                     |
// | You shouldn't have to change this usually since it's auto-determined      |
// +---------------------------------------------------------------------------+
define('AG_WEBAPP_DIR', dirname(__FILE__));

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to the directory where cache files will be    |
// | stored.                                                                   |
// |                                                                           |
// | NOTE: If you're going to use a public temp directory, make sure this is a |
// |       sub-directory of the temp directory. The cache system will attempt  |
// |       to clean up *ALL* data in this directory.                           |
// +---------------------------------------------------------------------------+
define('AG_CACHE_DIR', AG_WEBAPP_DIR . '/cache');

?>