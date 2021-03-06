
<h1>Mise a jour de <?= $animal->animal_name?></h1>
<form action="#" method="POST" enctype="multipart/form-data">

  <div>
    <label for="<?= $class?>_name">Nom</label>
    <input type="text" name="<?= $class?>_name" required value="<?= $animal->animal_name?>" >
  </div>

  <div>
    <label for="<?= $class?>_age">Age</label>
    <input type="number" name="<?= $class?>_age" required value="<?= $animal->animal_age?>">
  </div>

  <div>
    <label for="<?= $class?>_check_in">Date d'arrivé</label>
    <input type="date" name="<?= $class?>_check_in" required value="<?= $animal->animal_check_in?>">
  </div>

  <div>
    <label for="<?= $class?>_sex">Genre</label>
    <select name="<?= $class?>_sex">
      <option value="<?= $animal->animal_sex?>"><?= $animal->animal_sex?></option>
      <option value="male">Mâle</option>
      <option value="Female">Femelle</option>
    </select>
  </div>  

  <!--TODO faire table pour gérer les especes-->
  <div>
    <label for="<?= $class?>_species">Espece </label>
    <select name="<?= $class?>_species">
    <option value="<?= $animal->animal_species?>"><?= $animal->animal_species?></option>
    <option value="cat">chat</option>
    <option value="dog">chien</option>

        
    </select>
  </div>

  <div>
    <label for="<?= $class?>_chip">N˚ de puce </label>
    <input type="text" name="<?= $class?>_chip" required value="<?= $animal->animal_chip?>">
  </div>

  <div>
    <label for="<?= $class?>_weight">Poids</label>
    <input type="number" name="<?= $class?>_weight" required value="<?= $animal->animal_weight?>">
  </div>

  <div>
    <label for="<?= $class?>_care">Soin de l'animal</label>
    <textarea name="<?= $class?>_care" cols="50" rows="8"><?= $animal->animal_care?></textarea>
  </div>

  <div>
    <label for="caregiver_id">Soignant favoris</label>
    <select name="caregiver_id">
    <option value=<?= $fav_caregiver->caregiver_id?>><?= $fav_caregiver->caregiver_name?></option>
      <?php foreach ($caregivers as $caregiver) :?>
        <option value=<?= $caregiver->caregiver_id ?>><?= $caregiver->caregiver_name ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <p>Soignants</p>
    <?php foreach ($caregivers as $caregiver) :?>
      <input type="checkbox" name="caregivers[<?= $caregiver->caregiver_id ?>]" id="caregivers[<?= $caregiver->caregiver_id ?>]" <?= in_array($caregiver->caregiver_id, $caregivers_by_animal_id)? "checked" : ""?>>
      <label for="caregivers[<?= $caregiver->caregiver_id ?>]"><?= $caregiver->caregiver_name?> <?= $caregiver->caregiver_firstname?></label>
      <?php endforeach; ?>
  </div>

  <div>
    <label for="<?= $class?>_death">Mort de l'animal</label>
    <input type="date" name="<?= $class?>_death" value="<?= $animal->animal_death?>">
  </div>

  <div>
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"><?= $animal->animal_info?></textarea>
  </div>

  <div>
    <label for="<?= $class?>_picture">Photo</label>
    <input type="file" name="<?= $class?>_picture">
  </div>    

  <input type="submit">
</form>