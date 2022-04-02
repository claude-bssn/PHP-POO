<?php
namespace App\Table;

use App\App;
use App\Traits\Info;

  class Table {
    use Info;
    protected static $table;

    public static function getTable() {
      if(static::$table === null) {
        $class_name = explode('\\', get_called_class());
        static::$table = strtolower(end($class_name)). 's';
      }
      return static::$table;
    }

    public static function find($id){
      return App::getDB()->prepare(
        "SELECT * 
        From  ".static::getTable()." 
        WHERE ".static::$class."_id = $id", 
        [$id], 
        get_called_class(),
        true);
    }

    public static function all(){
      return App::getDB()->query(
        "SELECT * 
        From ". static::getTable(). "
        ", get_called_class());
    }

    public function __get($key) {
      $method = 'get'. ucfirst($key);
      $this->$key = $this->$method();
      return $this->$key;
    }

  }