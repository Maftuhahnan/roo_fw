<?php

namespace system\core;


/**
 * Class Roo
 * @package system\core
 *
 * The Framework Base Class
 */
class Roo {

    public static $di;

    private function __construct(){}
    
    private function __clone(){}
    
    public static function setTimeZone($tz){
        date_default_timezone_set($tz);
    }
    
    public static function autoloader($className){
        $className = ltrim($className, '\\');
        $fileName  = '';
        $namespace = '';
        if ($lastNsPos = strrpos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
    
    public static function registerAutoloader(){
        spl_autoload_register(array(new self, 'autoloader'));
    }
    
    public static function setDebugMode(){
        if(DEBUG == true){
            ini_set('display_errors', 1);
            error_reporting(E_ALL^E_STRICT);
        }else{
            ini_set('display_errors', 0);
            error_reporting(0);
        }
    }

    public static function initDI($config){
        self::$di = new DI($config);
    }

    public static function initDB(){
        self::$di['db_connection'] = function($c){
            return new DB($c['db']['dsn'], $c['db']['username'], $c['db']['password']);
        };
    }

    public static function dispatch(){
        Dispatcher::run();
    }
    
    public static function run($config){
        self::registerAutoloader();
        self::initDI($config);
        self::initDB();
        self::setDebugMode();
        self::setTimeZone(self::$di['timezone']);
        self::dispatch();
    }
}