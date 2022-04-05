<div class="d-flex justify-content-center">
  <div class="card mb-3 w-50 center">
    <div class="card-body">
      <h5 class="card-title"> <?= $owner->getFirstname()->name?></h5>
      <p class="card-text">adresse : <?= $owner->owner_address?></p>
      <p class="card-text">Téléphone : <?= $owner->owner_phone?></p>
      <p class="card-text">E-mail : <?= $owner->owner_mail?></p>
      <p class="card-text">Info complémentaires : <?= $owner->owner_info?></p>
      <p class="card-text"><small class="text-muted">Date d'arrivé : <?= $owner->owner_inscription_date?></small></p>
      <a href="/owner-update?id=<?= $owner->owner_id?>" class="btn btn-primary">Modifier</a>
      <div class="row">

      <?php foreach ($animal_by_owner as $animal) : ?>
          <div class="col-sm-6">
            <div class="card mb-4 <?= $animal->adoption_return_date !== null? "bg-secondary": "bg-success" ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $animal->animal_name?></h5>
                <p class="card-text">Date d'adoption : <?= $animal->adoption_date?></p>
                <p class="card-text">Date de retour : <?= $animal->adoption_return_date?></p>
                <a href="animal-details?id=<?= $animal->animal_id?>" class="btn btn-primary">Détail animal</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

    </div>
    </div>
  </div>
</div>