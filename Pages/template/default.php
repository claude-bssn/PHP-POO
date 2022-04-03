<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="d-flex flex-column justify-content-center">
  <header>
    <nav>
      <ul>
        <li>
          <a href="/home">Home</a>
          <a href="/caregiver">Soignants</a>
          <a href="/animal">Animaux</a>
          <a href="/owner">Propriétaires</a>
          <a href="/adoption">Adoptions</a>
        </li>
      </ul>
    </nav>
  </header>

  <?= $content?>

</body>
</html>