<?php

namespace App;
use PDO;

class Database {
  private $_pdo;
  public function __construct($bd_name, $bd_user , $bd_pass, $bd_host)
  {
    $this->_bd_name = $bd_name;
    $this->_bd_user = $bd_user;
    $this->_bd_pass = $bd_pass;
    $this->_bd_host = $bd_host; 
  }
  
  private function getPDO() {
    if($this->_pdo === null ){
      $pdo = new PDO('mysql:host=localhost;dbname=refuge;charset=utf8', 'root', 'root');
      // a commenter en prod 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;

    }
    return $this->pdo;
  }

  public function query($statement, $class_name) {
    $req = $this->getPDO()->query($statement);
    $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
    return $data;
  }

  public function prepare($statement, $attribute, $class_name, $one = false) {
    $req = $this->getPDO()->prepare($statement);
    $req->execute($attribute);
    $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
    if($one){
      $data = $req->fetch();
    }else {
      $data = $req->fetchAll();
    }

    return $data;
  }

}