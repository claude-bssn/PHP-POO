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
?>

<div class="d-flex justify-content-center">
  <div class="card mb-3 w-25 center">
    <img src="Public/img/<?= $caregiver->caregiver_picture == "" ? "avatar.jpeg" : "upload/$caregiver->caregiver_picture" ?>" 
      class="card-img-top " 
      alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $caregiver->caregiver_gender?> <?= $caregiver->name?> <?= $caregiver->caregiver_firstname?></h5>
      <p class="card-text">Téléphone : <?= $caregiver->caregiver_phone?></p>
      <p class="card-text">E-mail : <?= $caregiver->caregiver_mail?></p>
      <p class="card-text"> Spécialité : <?= $caregiver->caregiver_specialty?></p>
      <p class="card-text"> Traitements par jour : <?= $caregiver->caregiver_treatment_per_day?></p>
      <?php if(isset($chef)): ?>
        <p class="card-text"> Supérieur : <?= $chef->name ." ".$chef->caregiver_firstname?></p>
      <?php endif; ?>
      <p class="card-text">Info complémentaires : <?= $caregiver->caregiver_info?></p>
      <p class="card-text"><small class="text-muted">Date d'arrivé : <?= $caregiver->caregiver_check_in?></small></p>
      <p class="card-text"><small class="text-muted">Date de départ : <?= $caregiver->caregiver_check_out?></small></p>
      <a href="/caregiver-update?id=<?= $caregiver->caregiver_id?>" class="btn btn-primary">Modifier</a>
      <div class="row">
      
        <?php foreach ($affected_animals_id as $animal_id) : ?>
          <?php $animal = Animal::find($animal_id);?>
          <div class="col-sm-6">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title"><?= $animal->name?></h5>
                <p class="card-text"><?= $animal->animal_care?></p>
                <a href="animal-details?id=<?= $animal->id?>" class="btn btn-primary">Détail animal</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>