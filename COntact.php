<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-imageu">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="bg-images border"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- Autres liens -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="backoffice.php">Back Office</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-4">
        <h2>Contactez-nous</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $conn = new mysqli('localhost', 'root', '', 'restaurant');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Message envoyé avec succès</div>";
            } else {
                echo "<div class='alert alert-danger'>Erreur: " . $stmt->error . "</div>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea name="message" class="form-control" placeholder="Votre message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
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
</body>

</html>
