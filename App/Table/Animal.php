<?php
namespace App\Table;
use App\App;
use App\Interfaces\AnimalInterface;
use App\Table\Caregiver;
use App\Traits\Photo;

 class Animal extends Table implements AnimalInterface {
  use Photo;

  
  // public static $name;
  // public static $check_in;
  // public static $species;
  // public static $age;
  // public static $picture;

  public function __construct() {
    
  }

  public static function addAnimal(
    $name	,
    $age,		
    $check_in,
    $sex,
    $chip,		
    $species,	
    $picture,
    $weight,
    $caregiver,
    $care,
    $adoption_date,
    $death,		
    $info
    ) {
      App::getDB()->prepare(
        "INSERT into animals (  
          animal_name,
          animal_age,		
          animal_check_in,	
          animal_species,
          animal_sex,
          animal_chip,		
          animal_picture,
          animal_weight,
          caregiver_id,
          animal_care,
          animal_adoption_date,
          animal_death,		
          animal_info
          )
        value (
          :name, 
          :age, 
          :check_in, 
          :species, 
          :sex,
          :chip, 
          :picture, 
          :weight, 
          :caregiver,
          :care, 
          :adoption_date, 
          :death, 
          :info
        )",
        [
          'name' => $name	,
          'age' =>$age,		
          'check_in' => $check_in,	
          'species' => $species,
          'sex' => $sex,
          'chip' => $chip,		
          'picture' => $picture,
          'weight' => $weight,
          'caregiver' => $caregiver,
          'care' => $care,
          'adoption_date' => $adoption_date,
          'death' => $death,		
          'info' => $info
        ],
        __CLASS__,
        true
      );
    }  

  public static function updateAnimal(
    $id,
    $name,
    $age,		
    $check_in,
    $species,	
    $sex,
    $chip,		
    $picture,
    $weight,
    $care,
    $caregiver,
    $adoption_date,
    $death,		
    $info
  ) {
    App::getDB()->prepare(
      "UPDATE animals   
      SET 
        animal_name = :name,
        animal_age = :age,		
        animal_species = :species,
        animal_check_in = :check_in,	
        animal_sex = :sex,
        animal_chip = :chip,		
        animal_picture = :picture,
        animal_weight = :weight,
        animal_care = :care,
        caregiver_id = :caregiver,
        animal_adoption_date = :adoption_date,
        animal_death = :death,		
        animal_info = :info
      WHERE animal_id = :id ",
      [
        'id' => $id,
        'name' => $name,
        'age' => $age,		
        'species' => $species,
        'check_in' => $check_in,	
        'sex' => $sex,
        'chip' => $chip,		
        'picture' => $picture,
        'weight' => $weight,
        'care' => $care,
        'caregiver' => $caregiver,
        'adoption_date' => $adoption_date,
        'death' => $death,		
        'info' => $info
      ],
      __CLASS__,
      true
    );
  }

  public function getCheck_in() {
    return $this->animal_check_in;
  }

  public function getSpecies() {
    
    return $this->species;
  }

  public function getAge() {
    return $this->age;
  }

  public static function getCaregiver($id) {
 
    return Caregiver::find($id);
  }

  
}
