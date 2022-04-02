<?php
use App\Table\Caregiver;
$class = Caregiver::getClasse();
$caregiver = Caregiver::find($_GET['id']);
$chef = Caregiver::find($caregiver->caregiver_supervisor);
?>
<div class="d-flex justify-content-center">
  <div class="card mb-3 w-50 center">
    <img src="Public/img/upload/<?= $caregiver->caregiver_picture == "" ? "avatar.jpeg" : "$caregiver->caregiver_picture" ?>" 
      class="card-img-top " 
      alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $caregiver->caregiver_gender?> <?= $caregiver->name?> <?= $caregiver->caregiver_firstname?></h5>
      <p class="card-text">Téléphone : <?= $caregiver->caregiver_phone?></p>
      <p class="card-text">E-mail : <?= $caregiver->caregiver_mail?></p>
      <p class="card-text"> Spécialité : <?= $caregiver->caregiver_specialty?></p>
      <p class="card-text"> Traitements par jour : <?= $caregiver->caregiver_treatment_per_day?></p>
      <p class="card-text"> Spécialité : <?= $caregiver->caregiver_specialty?></p>
      <p class="card-text"> Supérieur : <?= $chef->name ." ".$chef->caregiver_firstname?></p>
      <p class="card-text">Info complémentaires : <?= $caregiver->caregiver_info?></p>
      <p class="card-text"><small class="text-muted">Date d'arrivé : <?= $caregiver->caregiver_check_in?></small></p>
      <p class="card-text"><small class="text-muted">Date de départ : <?= $caregiver->caregiver_check_out?></small></p>
      <a href="/caregiver-update?id=<?= $caregiver->caregiver_id?>" class="btn btn-primary">Modifier</a>

    </div>
  </div>

</div>