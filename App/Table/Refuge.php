<?php
namespace App\Table;
use App\App;
use App\Traits\Info;

class Refuge extends Table {
  use Info;

  public function __get($key) {
    $method = 'get'. ucfirst($key);
    $this->$key = $this->$method();
    return $this->$key;
  }

  public static function getRefuge() {    
    return App::getDB()->prepare(
      "SELECT * 
      From refuges", 
      [], 
      __class__,
      true);
  }

  public static function addRefuge( $name, $address, $phone) {
    App::getDB()->prepare(
      "INSERT into refuges (refuge_name, refuge_address, refuge_phone)
      value (:name, :address, :phone )",
      [
        'name' => $name,
        'address' => $address,
        'phone' => $phone
      ],
      __CLASS__,
      true
    );
  }
  
  public static function updateRefuge($id, $name, $address, $phone) {
    App::getDB()->prepare(
      "UPDATE refuges 
      SET refuge_name = :name , refuge_address = :address, refuge_phone = :phone
      WHERE refuge_id = :id ",
      [
        'id' => $id,
        'name' => $name,
        'address' => $address,
        'phone' => $phone
      ],
      __CLASS__,
      true
    );
  }

  public function getAddress() {
    return $this->refuge_address;
  }

  public function getPhone() {
    return $this->refuge_phone;
  }
}