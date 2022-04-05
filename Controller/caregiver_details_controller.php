<?php
use App\Table\Caregiver;
use App\Table\Animal;
use App\Table\Caregiver_animal;

$class = Caregiver::getClass();
$caregiver = Caregiver::find($_GET['id']);
if($caregiver->caregiver_supervisor !== null) {
  $chef = Caregiver::find($caregiver->caregiver_supervisor);
}

$affected_animals_id = Caregiver_animal::getAnimals($caregiver->id);

include "../Pages/caregiver_details.php";

?>
