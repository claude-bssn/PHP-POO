
<?php
use App\Table\Adoption;
$adoptions = Adoption::getAllExtended();
?>

<a href="/adoption-new" class="btn btn-primary">Ajouter une adoption</a>

<div class="align-self-center w-75">

<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Animal</th>
      <th scope="col">Propriétaire</th>
      <th scope="col">date d'adoption</th>
      <th scope="col">date de retour</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($adoptions as $adoption) : ?>
    <tr class="<?= $adoption->adoption_return_date !== null? "bg-secondary": "bg-success" ?>">
      <th  scope="row">Adoption de <?=$adoption->animal_name?></th>
      <td>Par <?=$adoption->owner_firstname." ". $adoption->owner_name?></td>
      <td>Date d'adoption:<?= $adoption->adoption_date?></td>
      <td>Date de retour:<?= $adoption->adoption_return_date?></td>
      <td><a href="/adoption-details?id=<?=$adoption->id?>" class="btn btn-primary">Détails</a></td>
    </tr>
  <?php endforeach ; ?>

  </tbody>
</table>
</div>