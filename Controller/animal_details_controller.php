<?php
use App\Table\Animal;

$class = Animal::getClass();
$animal = Animal::find($_GET['id']);
$id_caregiver= $animal->caregiver_id;
$caregiver = Animal::getCaregiver($id_caregiver);
$adoption_dates = Animal::getAdoptionDateByAnimal($animal->id);

include "../Pages/animal_details.php";

?>
