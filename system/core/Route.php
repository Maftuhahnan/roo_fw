<?php

namespace system\core;

class Route {
    
    public $pattern;
    public $controller;
    public $action;
    public $parameters = array();
    
    public function __construct($options = array()){
        if(is_array($options)){
            foreach($options as $key => $value){
                $this->$key = $value;
            }
        }
    }
    
    public static function flatten($array, $return = array()){
        foreach($array as $key => $value){
            if(is_array($value) || is_object($value)){
                $return = self::flatten($value, $return);
            }else{
                $return[] = $value;
            }
        }
        return $return;
    }
}