<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lenovo
 * Date: 30/12/13
 * Time: 10:39
 */

namespace system\core;

use \system\core\Roo;

class DB {

    protected $pdo;

    public function __construct($dsn, $username, $password){
        try{
            $this->pdo = new \PDO($dsn, $username, $password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            echo "Couldn't connect to DB";
        }
    }

    public function query($sql, array $params = array(), $many = true){
        try{
            $stmt = $this->pdo->prepare($sql);
            if(!empty($params)){
                foreach($params as $k => $v){
                    $stmt->bindParam($k, $v);
                }
            }
            $stmt->execute();
            if($many == true){
                return $stmt->fetchAll(\PDO::FETCH_OBJ);
            }else{
                return $stmt->fetch(\PDO::FETCH_OBJ);
            }
            $stmt->closeCursor();
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
        return false;
    }
}