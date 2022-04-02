<?php
namespace App\Table;

use App\App;
use App\Traits\Info;

  class Table {
    use Info;
    protected static $table;

    public static function getTable() {
        $class_name = explode('\\', get_called_class());
        static::$table = strtolower(end($class_name)). 's';
      return static::$table;
    }

    protected static $class;

      public static function getClass() {
          $class_name = explode('\\', get_called_class());
          static::$class = strtolower(end($class_name));
        return static::$class;
      }    

    public static function find($id){
      return App::getDB()->prepare(
        "SELECT * 
        From  ".self::getTable()." 
        WHERE ".self::getClass()."_id = $id", 
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

    

  }