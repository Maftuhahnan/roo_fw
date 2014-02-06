<?php

namespace app\backend\controllers;

use \system\core\Controller;
use \app\frontend\models\Post;

class SiteController extends Controller{
    
    public function action_index(){
        $this->render('index.twig', array('posts'=>Post::findAll()));
    }
    
    public function action_something(){
        echo 'something';
    }
}