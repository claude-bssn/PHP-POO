<h1>Ajouter un propriétaire</h1>
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
    <label for="<?= $class?>_address">Adresse</label>
    <input type="text" name="<?= $class?>_address" required>
  </div>

  <div>
    <label for="<?= $class?>_inscription_date">Date d'inscription</label>
    <input type="date" name="<?= $class?>_inscription_date" required>
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
    <label for="<?= $class?>_info">Informations supplémentaires</label>
    <textarea name="<?= $class?>_info" cols="50" rows="8"></textarea>
  </div>


  <input type="submit">
</form>

