<h1>Ajouter un soignant</h1>
<form action="#" method="POST" enctype="multipart/form-data">

  <div>
    <label for="<?= $class?>_name">Nom</label>
    <input type="text" name="<?= $class?>_name" required >
  </div>

  <div>
    <label for="<?= $class?>_firstname">Prénom</label>
    <input type="text" name="<?= $class?>_firstname" required>
  </div>

  <div>
    <label for="<?= $class?>_check_in">Date d'arrivé</label>
    <input type="date" name="<?= $class?>_check_in" required>
  </div>

  <div>
    <label for="<?= $class?>_gender">Genre</label>
    <select name="<?= $class?>_gender">
      <option value="Mme">Femme</option>
      <option value="M">Homme</option>
      <option value="NB">Non-Binaire</option>
    </select>
  </div>  

  <div>
    <label for="<?= $class?>_phone">Téléphone</label>
    <input type="number" name="<?= $class?>_phone" required>
  </div>

  <div>
    <label for="<?= $class?>_mail">Email</label>
    <input type="email" name="<?= $class?>_mail" required>
  </div>

  <div>
    <label for="<?= $class?>_specialty">Spécialité</label>
    <select name="<?= $class?>_specialty">
      <option value="cat">Chat</option>
      <option value="dog">Chien</option>
      <option value="reptile">Réptile</option>
      <option value="rabbit">Lapin</option>
      <option value="nac">Nouveau Animaux de compagnie</option>
    </select>
  </div> 

  <div>
    <label for="<?= $class?>_treatment_per_day">Nombre de traitement par jour</label>
    <input type="number" name="<?= $class?>_treatment_per_day" required>
  </div>

  <div>
    <label for="<?= $class?>_supervisor">Responsable</label>
    <select name="<?= $class?>_supervisor">
    <option value=>Aucun</option>

        <?php foreach ($caregivers as $caregiver) :?>
          <option value=<?= $caregiver->id ?>><?= $caregiver->name ?></option>
        <?php endforeach; ?>
    </select>
  </div>

  <div>
    <label for="<?= $class?>_check_out">Date de départ</label>
    <input type="date" name="<?= $class?>_check_out" >
  </div>

  <div>
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"></textarea>
  </div>

  <div>
    <label for="<?= $class?>_picture">Photo</label>
    <input type="file" name="<?= $class?>_picture" >
  </div>    

  <input type="submit">
</form>