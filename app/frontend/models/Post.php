<?php

namespace app\frontend\models;

use \system\core\DAO;

class Post extends DAO{

    static $tableName = 'post';
    
    static $fields = array(
        'post_id',
        'title',
        'slug',
        'content',
        'cat_id',
    );
}