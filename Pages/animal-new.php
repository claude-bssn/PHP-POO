<?php

use App\Table\Animal;
use App\Table\Caregiver;
$class = Animal::getClass();
$caregivers = Caregiver::all();
$protocol = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER['HTTP_HOST'];

if (!empty($_POST)){
  if($_FILES){
    Animal::addPhoto($_FILES[$class.'_picture']);
  }
  
  $file = 
    $new_animal = Animal::addAnimal( 
      $name = $_POST[$class.'_name'],
      $age = $_POST[$class.'_age'],	
      $check_in = $_POST[$class.'_check_in'] === "" ? null : $_POST[$class.'_check_in'],	
      $sex = $_POST[$class.'_sex'],	
      $chip = $_POST[$class.'_chip'],	
      $species = $_POST[$class.'_species'],			
      $picture = Animal::$file_name,
      $weight = $_POST[$class.'_weight'],	
      $caregiver = $_POST['caregiver_id'],	
      $care = $_POST[$class.'_care'],	
      $adoption_date = $_POST[$class.'_adoption_date'] === ""? null : $_POST[$class.'_adoption_date'],	
      $death = $_POST[$class.'_death'] === "" ? null : $_POST[$class.'_death'],			
      $info = $_POST[$class.'_info']	
    );
    header("Location: $protocol://$host/animal");
    exit;
}
?>

<h1>Ajouter un animal</h1>
<form action="#" method="POST" enctype="multipart/form-data">

  <div>
    <label for="<?= $class?>_name">Nom</label>
    <input type="text" name="<?= $class?>_name" required >
  </div>

  <div>
    <label for="<?= $class?>_age">Age</label>
    <input type="number" name="<?= $class?>_age" required>
  </div>

  <div>
    <label for="<?= $class?>_check_in">Date d'arrivé</label>
    <input type="date" name="<?= $class?>_check_in" required>
  </div>

  <div>
    <label for="<?= $class?>_sex">Genre</label>
    <select name="<?= $class?>_sex">
      <option value="male">Mâle</option>
      <option value="Female">Femelle</option>
    </select>
  </div>  

  <!--TODO faire table pour gérer les especes-->
  <div>
    <label for="<?= $class?>_species">Espece </label>
    <select name="<?= $class?>_species">
    <option value="cat">chat</option>
    <option value="dog">chien</option>

        
    </select>
  </div>

  <div>
    <label for="<?= $class?>_chip">N˚ de puce </label>
    <input type="text" name="<?= $class?>_chip" required>
  </div>

  <div>
    <label for="<?= $class?>_weight">Poids</label>
    <input type="number" name="<?= $class?>_weight" required>
  </div>

  <div>
    <label for="<?= $class?>_care">Soin de l'animal</label>
    <textarea name="<?= $class?>_care" cols="50" rows="8"></textarea>
  </div>

  <div>
    <label for="<?= $class?>_adoption_date">Date d'adoption</label>
    <input type="date" name="<?= $class?>_adoption_date">
  </div>

  <div>
    <label for="caregiver_id">Soignant favoris faire un truc avec checkBox</label>
    <select name="caregiver_id">
    <option value=>Aucun</option>
      <?php foreach ($caregivers as $caregiver) :?>
        <option value=<?= $caregiver->caregiver_id ?>><?= $caregiver->caregiver_name ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div>
    <label for="<?= $class?>_death">Mort de l'animal</label>
    <input type="date" name="<?= $class?>_death" >
  </div>

  <div>
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"></textarea>
  </div>

  <div>
    <label for="<?= $class?>_picture">Photo</label>
    <input type="file" name="<?= $class?>_picture">
  </div>    

  <input type="submit">
</form>