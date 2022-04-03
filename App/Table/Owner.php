<?php
namespace App\Table;
use App\App;

  class Owner extends Table {
    private $_owner_firstname;

    public function __construct()
    {
      $this->_owner_firstname;
       
    }

    public static function addOwner(
      $name	,
      $firstname,		
      $inscription_date,	
      $address,
      $phone,
      $mail,
      $info
    ) {
      App::getDB()->prepare(
        "INSERT into owners (  
          owner_name,
          owner_firstname,		
          owner_inscription_date,	
          owner_address,
          owner_phone,
          owner_mail,	
          owner_info
          )
        value (
          :name, 
          :firstname, 
          :inscription_date, 
          :address, 
          :phone,
          :mail,
          :info
        )",
        [
          'name' => $name	,
          'firstname' =>$firstname,		
          'inscription_date' => $inscription_date,	
          'address' => $address,
          'phone' => $phone,
          'mail' => $mail,		
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }

    public static function updateOwner(
      $id,
      $name	,
      $firstname,		
      $inscription_date,	
      $address,
      $phone,
      $mail,	
      $info
    ) {
      App::getDB()->prepare(
        "UPDATE owners   
        SET 
          owner_name = :name, 
          owner_firstname = :firstname, 
          owner_inscription_date = :inscription_date, 
          owner_address = :address, 
          owner_phone = :phone,
          owner_mail = :mail,
          owner_info = :info
        WHERE owner_id = :id 
        ",
        [
          'id' => $id,
          'name' => $name,
          'firstname' => $firstname,		
          'inscription_date' => $inscription_date,	
          'address' => $address,
          'phone' => $phone,
          'mail' => $mail,		
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }
    public function getFirstname() {
      echo($this->owner_firstname." ");
      return $this;
    }

    public static function animalByOwner($id) {
      return App::getDB()->prepare(
        "SELECT *
        FROM animals a
        LEFT JOIN adoptions ad ON ad.animal_id = a.animal_id
        WHERE ad.owner_id = :id", 
        ['id' => $id], 
        __CLASS__,
        false);
    }
  }