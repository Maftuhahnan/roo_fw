<?php

return array(

    // General Config
    'base_url'=>'http://localhost/roo/',
    'timezone'=>'Asia/Jakarta',
    'twig_cache'=>'/system/cache/twig',

    // Modules
    'modules'=>array(
        'backend'
    ),

    // Database Config
    'db'=>array(
        'dsn'=>'mysql:host=localhost;dbname=yourblog',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ),

);