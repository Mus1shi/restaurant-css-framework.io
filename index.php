<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-image">
  <div class="jumbotron text-center text-danger bg-dark">
    <h1>Bienvenue Chez Vous</h1>
    <p>Là où le bonheur se découvre en se sentant chez soi</p>
    <a class="btn btn-warning btn-lg" href="COntact.php" role="button">Réservation</a>
  </div>

  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-6 mb-4">
        <div class="card" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Chez Vous</h5>
            <h6 class="card-subtitle mb-2 text-muted">Le Restaurant</h6>
            <p class="card-text">Rue de la positude,23B <br>1232 Zenlandia <br>+98/1432.4.5543</p>
            <a href="Restaurant.php" class="card-link btn btn-warning">Viendez-ici</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Chez Vous</h5>
            <h6 class="card-subtitle mb-2 text-muted">Le BioMarket</h6>
            <p class="card-text">Rue de la positude,24A <br>1232 Zenlandia <br>+98/1432.4.5543</p>
            <a href="biomarket.html" class="card-link btn btn-warning">Viendez-là</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-4">
    <div class="container-fluid bg-warning">
      <div class="row">
        <div class="col text-dark">
          <a href="#">mention légale</a>
        </div>
        <div class="col d-flex justify-content-end">
          <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
