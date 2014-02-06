<?php

namespace system\core;

class Dispatcher{
    
    public static function run(){
        $real_uri = preg_replace(
            '~^'.dirname($_SERVER['SCRIPT_NAME']).'~',
            '',
            $_SERVER['REQUEST_URI'],
            1
        );
        
        $uri_parts = explode('/', $real_uri);
        
        if(empty($uri_parts[0])){
            array_shift($uri_parts);
        }
        
        if(empty($uri_parts[count($uri_parts)-1])){
            array_pop($uri_parts);
        }
        
        $module_name = 'frontend';
        
        if(isset($uri_parts[0])){
            foreach(Roo::$di['modules'] as $module){
                if($uri_parts[0] === $module){
                    $module_name = $module;
                    array_shift($uri_parts);
                    break;
                }
            }
        }
        
        $controller_name = ucfirst(array_shift($uri_parts));
        $action_name = array_shift($uri_parts);
        
        if(empty($controller_name)){
            $controller_name = 'SiteController';
        }else{
            $controller_name = $controller_name.'Controller';
        }
        
        if(empty($action_name)){
            $action_name = 'action_index';
        }else{
            $action_name = 'action_'.$action_name;
        }
        
        $fullpath = "\\app\\".$module_name."\\".'controllers'."\\".$controller_name;
        
        try{
            $controller = new $fullpath($module_name);
            call_user_func_array(array($controller, $action_name), $uri_parts);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}