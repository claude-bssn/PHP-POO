<?php
namespace App\Table;
use App\Interfaces\AnimalInterface;
use App\Traits\Info;

 class Animal extends Table implements AnimalInterface {
  use Info;

  const EYES = 2;
  
  protected static $name;
  protected static $legs;
  protected static $type;
  protected static $age;

  public function __construct() {
    
  }

  public function getSpecies()
  {

  }

  public function getChip(){

  }

  final function setAge(){
    static::$age = 5;
  }
  
  public static function getAge() {
    return static::$age;
  }



}
