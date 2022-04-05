<?php

  use App\Table\Adoption;
  use App\Table\Animal;
  use App\Table\Owner;

  $class = Adoption::getClass();
  $adoption = Adoption::findExtended($_GET['id']);
  $animals = Animal::all();
  $owners = Owner::all();

  $protocol = $_SERVER["REQUEST_SCHEME"];
  $host = $_SERVER['HTTP_HOST'];
  if (!empty($_POST)) {
    $new_adoption = Adoption::updateAdoption(
      $id = $adoption->id,
      $animal_id = Adoption::cleanString($_POST['animal_id']),		
      $owner_id = Adoption::cleanNum($_POST['owner_id']),
      $adoption_date = $_POST[$class.'_date'],
      $adoption_return_date = $_POST[$class.'_return_date'] === ""? null: $_POST[$class.'_return_date'],
      $adoption_price = Adoption::cleanNum($_POST[$class.'_price']),
      $info= Adoption::cleanString($_POST[$class.'_info'])
    );
    Animal::setAdoptionDate($animal_id, $_POST[$class.'_date']);
  if($_POST[$class."_return_date"] !== "") {
    Animal::setReturnDate($animal_id, $_POST[$class.'_return_date']);
    Animal::setAdoptionDate($animal_id, null);
  }
    header("Location: $protocol://$host/adoption");
    exit;
}
include "../Pages/adoption_update.php";

?>
