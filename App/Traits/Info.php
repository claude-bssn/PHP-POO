<?php
namespace App\Traits;

  trait Info {
    protected static $class;

      public static function getClasse() {
        if(static::$class === null) {
          $class_name = explode('\\', get_called_class());
          static::$class = strtolower(end($class_name));
        }
        return static::$class;
      }    

      public function getId() {
        $column = static::getClasse()."_id";
        return $this->$column;
      }

      public function getName() {
        $column = static::getClasse()."_name";
        return $this->$column;
      }

      public function getInfo(){
        $column = static::getClasse()."_info";
        return $this->$column;
      }
  }