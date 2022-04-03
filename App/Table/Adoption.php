<?php
namespace App\Table;
use App\App;

  class Adoption extends Table {
    
    public static function addAdoption(
      $animal_id,		
      $owner_id,	
      $adoption_date,
      $adoption_price,
      $info
    ) {
      App::getDB()->prepare(
        "INSERT into adoptions (  
          animal_id,		
          owner_id,	
          adoption_date,
          adoption_price,	
          adoption_info
          )
        value (
          :animal_id, 
          :owner_id, 
          :adoption_date, 
          :adoption_price,
          :info
        )",
        [
          'animal_id' =>$animal_id,		
          'owner_id' => $owner_id,	
          'adoption_date' => $adoption_date,
          'adoption_price' => $adoption_price,
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }

    public static function updateAdoption(
      $id,
      $animal_id,		
      $owner_id,	
      $adoption_date,
      $adoption_return_date,
      $adoption_price,
      $info
    ) {
      App::getDB()->prepare(
        "UPDATE adoptions   
        SET 
          animal_id = :animal_id, 
          owner_id = :owner_id, 
          adoption_date = :adoption_date, 
          adoption_return_date = :adoption_return_date,
          adoption_price = :adoption_price,
          adoption_info = :info
        WHERE adoption_id = :id 
        ",
        [
          'id' => $id,
          'animal_id' => $animal_id,		
          'owner_id' => $owner_id,	
          'adoption_date' => $adoption_date,
          'adoption_return_date' => $adoption_return_date,
          'adoption_price' => $adoption_price,
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }

    public static function getAllExtended() {
      return App::getDB()->prepare(
        "SELECT a.*, an.*, o.*
        FROM adoptions a 
        LEFT JOIN animals an ON a.animal_id = an.animal_id
        LEFT JOIN owners o ON a.owner_id = o.owner_id", 
        [], 
        get_called_class(),
        false);
    } 

    public static function findExtended($id) {
      return App::getDB()->prepare(
        "SELECT a.*, an.*, o.*
        FROM adoptions a 
        LEFT JOIN animals an ON a.animal_id = an.animal_id
        LEFT JOIN owners o ON a.owner_id = o.owner_id
        WHERE a.adoption_id = :id", 
        ['id' => $id], 
        __CLASS__,
        true);
    } 
  }