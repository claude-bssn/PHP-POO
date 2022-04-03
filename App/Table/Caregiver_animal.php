<?php
namespace App\Table;
use App\App;

class Caregiver_animal extends Table { 
  public static function addCaregiver($animal_id, $array){
    foreach($array as $key=>$caregiver_id) {
      App::getDb()->prepare(
        "INSERT into caregiver_animals (
          animal_id,
          caregiver_id
        )
        value (
          :animal_id,
          :caregiver_id
        )",
        [
          'animal_id' => $animal_id,
          'caregiver_id' => $key
        ],
        __CLASS__,
        true
      );
    }
  }

  public static function updateCaregiver($animal_id, $array){
    App::getDb()->prepare(
      " DELETE FROM `caregiver_animals` 
      WHERE `caregiver_animals`.`animal_id` = :animal_id ",
    [
      'animal_id' => $animal_id
    ],
      __CLASS__,
      true
    );
    static::addCaregiver($animal_id, $array);
  }

  public static function getCaregivers($animal_id){
    $array =  App::getDB()->prepare(
      "SELECT `caregiver_animals`.`caregiver_id`
      From caregiver_animals 
      WHERE `caregiver_animals`.`animal_id` = :animal_id 
      ",
      [
        'animal_id' => $animal_id
      ],
      __CLASS__,
      false);

      return array_column($array, 'caregiver_id');
  }

  public static function getAnimals($caregiver_id){
    $array = App::getDB()->prepare(
      "SELECT `caregiver_animals`.`animal_id`
      From caregiver_animals 
      WHERE `caregiver_animals`.`caregiver_id` = :caregiver_id 
      ",
      [
        'caregiver_id' => $caregiver_id
      ],
      __CLASS__,
      false);
     
    return array_column($array, 'animal_id');
  }
}