<?php if(!isset($_SESSION)) session_start();

define('ROOT', dirname(__FILE__));
define('DEBUG', true);

require ROOT.'/system/core/Roo.php';
$config = require ROOT.'/system/config/config.php';

\system\core\Roo::run($config);