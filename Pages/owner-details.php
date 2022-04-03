<?php
use App\Table\Owner;

$class = Owner::getClass();
$owner = Owner::find($_GET['id']);
?>

<div class="d-flex justify-content-center">
  <div class="card mb-3 w-50 center">
    <div class="card-body">
      <h5 class="card-title"> <?= $owner->name?> <?= $owner->owner_firstname?></h5>
      <p class="card-text">Téléphone : <?= $owner->owner_phone?></p>
      <p class="card-text">E-mail : <?= $owner->owner_mail?></p>
      <p class="card-text">Info complémentaires : <?= $owner->owner_info?></p>
      <p class="card-text"><small class="text-muted">Date d'arrivé : <?= $owner->owner_inscription_date?></small></p>
      <a href="/owner-update?id=<?= $owner->owner_id?>" class="btn btn-primary">Modifier</a>
    </div>
  </div>
</div>