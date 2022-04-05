<?php

use App\Table\Animal;
use App\Table\Caregiver;
use App\Table\Caregiver_animal;

$class = Animal::getClass();
$caregivers = Caregiver::all();
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
  if($_FILES){
    Animal::addPhoto($_FILES[$class.'_picture']);
  }
  
  $new_animal = Animal::addAnimal( 
    $name = Animal::cleanString($_POST[$class.'_name']),
    $age = Animal::cleanNum($_POST[$class.'_age']),	
    $check_in = $_POST[$class.'_check_in'] === "" ? null : $_POST[$class.'_check_in'],	
    $sex = Animal::cleanString($_POST[$class.'_sex']),	
    $chip = Animal::cleanString($_POST[$class.'_chip']),	
    $species = Animal::cleanString($_POST[$class.'_species']),			
    $picture = Animal::$file_name,
    $weight = Animal::cleanNum($_POST[$class.'_weight']),	
    $caregiver = Animal::cleanNum($_POST['caregiver_id']),	
    $care = Animal::cleanString($_POST[$class.'_care']),	
    $death = $_POST[$class.'_death'] === "" ? null : $_POST[$class.'_death'],			
    $info = Animal::cleanString($_POST[$class.'_info'])	
  );
  $id_class = Animal::getLastId()[0]->id;
  Caregiver_animal::addCaregiver($id_class , $_POST['caregivers']);

  header("Location: $protocol://$host/animal");
  exit; 
}

include "../Pages/animal_new.php";
?>

