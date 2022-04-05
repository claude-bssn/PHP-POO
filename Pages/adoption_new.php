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