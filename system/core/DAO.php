<?php

namespace system\core;

use \system\core\Roo;

abstract class DAO{

    protected static $tableName;
    protected static $fields;

    /**
     * @return DB
     */
    public static function getDB(){
        return Roo::$di['db_connection'];
    }
    
    public static function queryAll($sql, array $params = array()){
        $db = self::getDB();
        return $db->query($sql, $params);
    }
    
    public static function queryOne($sql, array $params = array()){
        $db = self::getDB();
        return $db->query($sql, $params, false);
    }
    
    public static  function findAll($where = '', array $params = array()){
        $db = self::getDB();
        $fields = implode(',', static::$fields);
        $sql = "select {$fields} from ".static::$tableName;
        if($where !== ''){
            $sql .= ' where '.$where;
        }
        return $db->query($sql, $params);
    }
}