<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="restaurantbg">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning py-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" class="bg-images border"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Restaurant.php">Restaurant</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pictures.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biomarket.php">BioMarket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="COntact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4 text-light">
    <div class="text-center">
      <h1 class="text-dark"><strong>Chez Vous !</strong></h1> 
      <h4 class="text-warning">Le Restaurant</h4>
      <br>
      <p><strong>Plongez dans une expérience gastronomique unique où chaque plat vous fait sentir comme à la maison. 
        Chez Vous, notre objectif est de vous offrir bien plus qu'un repas ; nous vous invitons à vivre une expérience culinaire chaleureuse et conviviale, où chaque visite est comme retrouver de vieux amis dans le confort de votre chez-soi.
      Découvrez une immersion authentique dans la culture culinaire du Japon au cœur de votre ville.</strong></p>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4 mt-4">
        <h4 class="text-dark">Le restaurant</h4>
        <ul>
          <li class="text-light"><strong>Lundi - Vendredi</strong> : 12:00 - 14:30, 18:30 - 22:30</li>
          <li class="text-light"><strong>Samedi :</strong>18:30 - 23:00</li>
          <li class="text-light"><strong>Dimanche :</strong>Fermé</li> 
        </ul>
        <br>
        <h4 class="text-dark">Le biomarket</h4>
        <ul>
          <li class="text-light"><strong>Lundi - Vendredi</strong> : 08:00 - 20:00</li>
          <li class="text-light"><strong>Samedi</strong> : 08:00 - 19:00</li>
          <li class="text-light"><strong>Dimanche :</strong>Fermé</li>
        </ul>
      </div>
      <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5038.456172626837!2d4.354853376085388!3d50.845460458844485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47fd1d960c1%3A0xcbd18b1ea8412062!2sBeCode%20Brussels!5e0!3m2!1sfr!2sbe!4v1717499903360!5m2!1sfr!2sbe" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="text-warning mt-4">N'hésitez pas à regarder nos plats via notre <a href="Pictures.php">galerie</a>.</p>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
