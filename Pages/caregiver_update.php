<?php
use App\Table\Caregiver;
?>

<h1>Modifier la fiche soignant</h1>
<form action="#" method="POST" enctype="multipart/form-data">

  <div>
    <label for="<?= $class?>_name">Nom</label>
    <input type="text" name="<?= $class?>_name" required value="<?= $caregiver->caregiver_name?>" >
  </div>

  <div>
    <label for="<?= $class?>_firstname">Prénom</label>
    <input type="text" name="<?= $class?>_firstname" required value="<?= $caregiver->caregiver_firstname?>">
  </div>

  <div>
    <label for="<?= $class?>_check_in">Date d'arrivé</label>
    <input type="date" name="<?= $class?>_check_in" required value="<?= $caregiver->caregiver_check_in?>">
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
    <input type="number" name="<?= $class?>_phone" required value="<?= $caregiver->caregiver_phone ?>">
  </div>

  <div>
    <label for="<?= $class?>_mail">Email</label>
    <input type="email" name="<?= $class?>_mail" required value="<?= $caregiver->caregiver_mail ?>">
  </div>

  <div>
    <label for="<?= $class?>_specialty">Spécialité</label>
    <select name="<?= $class?>_specialty">
      <option value="<?= $caregiver->caregiver_specialty?>" selected></option>
      <option value="cat">Chat</option>
      <option value="dog">Chien</option>
      <option value="reptile">Réptile</option>
      <option value="rabbit">Lapin</option>
      <option value="nac">Nouveau Animaux de compagnie</option>
    </select>
  </div> 

  <div>
    <label for="<?= $class?>_treatment_per_day">Nombre de traitement par jour</label>
    <input type="number" name="<?= $class?>_treatment_per_day" required value="<?= $caregiver->caregiver_treatment_per_day?>">
  </div>

  <div>
    <label for="<?= $class?>_supervisor">Responsable</label>
    <select name="<?= $class?>_supervisor">
    <option value=>Aucun</option>
      <?php if($caregiver->caregiver_supervisor !== null) :?>
        <option value="<?= $caregiver->caregiver_supervisor?>" selected><?= Caregiver::find($caregiver->caregiver_supervisor)->name?></option>
      <?php endif ;?>
      <?php foreach ($chefs as $chef) :?>
        <option value=<?= $chef->id ?>><?= $chef->name ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div>
    <label for="<?= $class?>_check_out">Date de départ</label>
    <input type="date" name="<?= $class?>_check_out" value="<?= $caregiver->caregiver_check_out?>">
  </div>

  <div>
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"><?= $caregiver->caregiver_info?></textarea>
  </div>

  <div>
    <label for="<?= $class?>_picture">Photo</label>
    <input type="file" name="<?= $class?>_picture" >
    
    <img src="Public/img/<?= $caregiver->caregiver_picture == "" ? "avatar.jpeg" : "upload/$caregiver->caregiver_picture" ?>" alt="" class="w-25">
    
  </div>    

  <input type="submit">
</form>