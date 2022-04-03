<?php
use App\Table\Animal;

$class = Animal::getClass();
$animal = Animal::find($_GET['id']);
$id_caregiver= $animal->caregiver_id;
$caregiver = Animal::getCaregiver($id_caregiver);
?>
<div class="d-flex justify-content-center">
  <div class="card mb-3 w-50 center">
    <img src="Public/img/upload/<?= $animal->animal_picture == "" ? "avatar.jpeg" : "$animal->animal_picture" ?>" 
      class="card-img-top " 
      alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $animal->name?></h5>
      <p class="card-text">Age : <?= $animal->animal_age?></p>
      <p class="card-text">Sexe : <?= $animal->animal_sex?></p>
      <p class="card-text"> Espece : <?= $animal->animal_species?></p>
      <p class="card-text"> Soin : <?= $animal->animal_care?></p>
      <p class="card-text"> Poids en gr : <?= $animal->animal_weight?></p>
      <p class="card-text"> Soignant favoris : <?= $caregiver->caregiver_name ." ".$caregiver->caregiver_firstname?></p>
      <p class="card-text">Info complémentaires : <?= $animal->animal_info?></p>
      <p class="card-text"><small class="text-muted">Date d'arrivé : <?= $animal->animal_check_in?></small></p>
      <p class="card-text"><small class="text-muted">Date d'adoption : <?= $animal->animal_adoption_date?></small></p>
      <p class="card-text"><small class="text-muted">Date de décès: <?= $animal->animal_death?></small></p>
      <a href="/animal-update?id=<?= $animal->id?>" class="btn btn-primary">Modifier</a>

    </div>
  </div>

</div>