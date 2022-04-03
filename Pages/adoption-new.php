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
?>

<h1>Ajouter une adoption</h1>
<form action="#" method="POST" enctype="multipart/form-data">

  
  <div>
    <label for="owner_id">Future Propriétaire</label>
    <select name="owner_id">
      <?php foreach ($owners as $owner) :?>
        <option value=<?= $owner->owner_id ?>> <?= $owner->owner_name ?></option>
      <?php endforeach; ?>
    </select>

    <div>
    <label for="animal_id">Future Propriétaire</label>
    <select name="animal_id">
      <?php foreach ($animals as $animal) :?>
        <option value=<?= $animal->animal_id ?>> <?= $animal->animal_name ?></option>
      <?php endforeach; ?>
    </select>

    <div>
      <label for="<?= $class?>_date">Date d'adoption</label>
      <input type="date" name="<?= $class?>_date" required>
    </div>

    <div>
      <label for="<?= $class?>_price">Prix d'adoption</label>
      <input type="number" name="<?= $class?>_price" required>
    </div>

    <div>
      <label for="<?= $class?>_info">Informations supplémentaires</label>
      <textarea name="<?= $class?>_info" cols="50" rows="8"></textarea>
    </div>
  <input type="submit">
</form>