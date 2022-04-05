<?php

use App\Table\Animal;
use App\Table\Caregiver;
use App\Table\Caregiver_animal;


$class = Animal::getClass();
$caregivers = Caregiver::all();
$animal = Animal::find($_GET['id']);
$id_caregiver= $animal->caregiver_id;

$fav_caregiver = Animal::getCaregiver($id_caregiver);
$caregivers_by_animal_id = Caregiver_animal::getCaregivers($animal->id);
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
  if($_FILES){
    Animal::addPhoto($_FILES[$class.'_picture']);
  }

  $new_animal = Animal::updateAnimal( 
    $id = $animal->id,
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
  Caregiver_animal::updateCaregiver($animal->id , $_POST['caregivers']);
  
  header("Location: $protocol://$host/animal-details?id=$id");
  exit;
}
include "../Pages/animal_update.php";
?>

