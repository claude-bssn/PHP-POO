<?php
namespace App\Table;

use App\App;
use App\Traits\Info;

  class Table {
    use Info;

    protected static $table;
    protected static $class;

    public static function getTable() {
        $class_name = explode('\\', get_called_class());
        static::$table = strtolower(end($class_name)). 's';
      return static::$table;
    }


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

    public static function getLastId(){
      return App::getDB()->query(
        "SELECT ".self::getClass()."_id 
        From ". static::getTable()." 
        ORDER BY ".self::getClass()."_id DESC LIMIT 1
        ", get_called_class()); 

    }
  }