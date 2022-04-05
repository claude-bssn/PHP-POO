<form action="/refuge-update?id=<?= $refuge->id ?>" method="POST">
  <input type="text" name="refuge_id" value="<?= $refuge->id?>" hidden>
  <div>
    <label for="refuge_name">Nom de votre refuge</label>
    <input type="text" name="refuge_name" value="<?= $refuge->name ?>">
  </div>

  <div>
    <label for="refuge_address">Adresse de votre refuge</label>
    <input type="text" name="refuge_address" value="<?= $refuge->address ?>">
  </div>

  <div>
    <label for="refuge_phone">Téléphone de votre refuge</label>
    <input type="number" name="refuge_phone" value="<?= $refuge->phone ?>">
  </div>

  <input type="submit">
</form>