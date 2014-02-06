<?php

namespace system\core;

use \system\core\Roo;

abstract class Controller{

    protected $module;
    
    public function __construct($module){
        $this->module = $module;
    }
    
    public function render($template, array $data=array()){
        require ROOT.'/system/lib/Twig/Autoloader.php';
        \Twig_Autoloader::register(true);
        
        $loader = new \Twig_Loader_Filesystem('app/'.$this->module.'/views');
        
        $twig = new \Twig_Environment($loader, array(
            'cache'=>Roo::$di['twig_cache'],
            'auto_reload'=>true,
        ));
        
        $base_url_config = Roo::$di['base_url'];
        
        $twig->addGlobal('base_url', $base_url_config);

        $url_func = new \Twig_SimpleFunction('url', function($route) use($base_url_config){
            return $base_url_config.$route;
        });
        
        $twig->addFunction($url_func);
        
        $template = $twig->loadTemplate($template);
        $template->display($data);
    }
    
    public function redirect($to, $statusCode=302){
        header('Location: '.Roo::$di['base_url'].$to, true, $statusCode);
    }
}