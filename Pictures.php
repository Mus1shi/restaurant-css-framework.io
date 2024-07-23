<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galerie Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="fond-gal">
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

  <div class="text-center text-light my-4">
    <h1>Galerie</h1>
    <h5>Nos plats et bien plus</h5>
    <p>Laissez vous emporter par notre ambiance chaleureuse et conviviale !</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="images/plat1.jpg" class="img-thumbnail custom-image" alt="Photo 1"
                    onclick="displayFullScreen('images/plat1.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat2_mini.jpg" class="img-thumbnail custom-image" alt="Photo 2"
                    onclick="displayFullScreen('images/plat2_mini.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat3_mini.jpg" class="img-thumbnail custom-image" alt="Photo 3"
                    onclick="displayFullScreen('images/plat3_mini.jpg')">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="images/plat4_mini.jpg" class="img-thumbnail custom-image" alt="Photo 4"
                    onclick="displayFullScreen('images/plat4_mini.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat5_mini.jpg" class="img-thumbnail custom-image" alt="Photo 5"
                    onclick="displayFullScreen('images/plat5_mini.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat6_mini.jpg" class="img-thumbnail custom-image" alt="Photo 6"
                    onclick="displayFullScreen('images/plat6_mini.jpg')">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="images/plat7_mini.jpg" class="img-thumbnail custom-image" alt="Photo 7"
                    onclick="displayFullScreen('images/plat7_mini.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat8_mini.jpg" class="img-thumbnail custom-image" alt="Photo 8"
                    onclick="displayFullScreen('images/plat8_mini.jpg')">
                </div>
                <div class="col-12 col-md-4">
                  <img src="images/plat9_mini.jpg" class="img-thumbnail custom-image" alt="Photo 9"
                    onclick="displayFullScreen('images/plat9_mini.jpg')">
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="fullscreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img id="fullscreenImage" src="" class="img-fluid" alt="Photo en grand">
        </div>
      </div>
    </div>
  </div>
  <div class="text-center text-white my-4">
    <p>Cela vous a donné faim ? N'hésitez pas à jeter un oeil à notre <a href="Menu.php"><strong>menu</strong></a> !
    </p>
  </div>

  <footer>
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
  <script>
    function displayFullScreen(imageSrc) {
      var fullscreenImage = document.getElementById('fullscreenImage');
      fullscreenImage.src = imageSrc;
      $('#fullscreenModal').modal('show');
    }
  </script>
</body>

</html>
