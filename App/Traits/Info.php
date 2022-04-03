<?php
namespace App\Traits;

  trait Info {
    public function __get($key) {
      $method = 'get'. ucfirst($key);
      $this->$key = $this->$method();
      return $this->$key;
    }

    public function getId() {
      $column = static::getClass()."_id";
      return $this->$column;
    }

    public function getName() {
      $column = static::getClass()."_name";
      return $this->$column;
    }

    public function getInfo(){
      $column = static::getClass()."_info";
      return $this->$column;
    }

    public function getPicture(){
      $column = static::getClass()."_picture";
      return $this->$column;
    }

    public static function isEmail($email) {
      return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
  }