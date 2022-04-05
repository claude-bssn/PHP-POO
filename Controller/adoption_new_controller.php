<?php

  use App\Table\Adoption;
  use App\Table\Animal;
  use App\Table\Owner;

  $class = Adoption::getClass();
  $animals = Animal::allAvailable();
  $owners = Owner::all();

  $protocol = $_SERVER["REQUEST_SCHEME"];
  $host = $_SERVER['HTTP_HOST'];
  if (!empty($_POST)) {
    $new_adoption = Adoption::addAdoption(
      $animal_id = Adoption::cleanString($_POST['animal_id']),		
      $owner_id = Adoption::cleanNum($_POST['owner_id']),	
      $adoption_date = $_POST[$class.'_date'],
      $adoption_price = Adoption::cleanNum($_POST[$class.'_price']),
      $info= Adoption::cleanString($_POST[$class.'_info'])
    );
    Animal::setAdoptionDate($animal_id, $_POST[$class.'_date']);

    header("Location: $protocol://$host/adoption");
    exit;

  }
  include "../Pages/adoption_new.php";
?>

