<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-image: url("https://static.vecteezy.com/system/resources/previews/002/307/811/original/watercolor-pastel-background-hand-painted-aquarelle-colorful-stains-on-paper-vector.jpg");
            height: 100vh;
        }
    </style>
    <?php
    session_start();


    // die('hoi');
    if (isset($_SESSION['rol'])) {
        $naam = $_SESSION['naam'];
        if ($_SESSION['rol'] == 'klant') {
            echo '<nav class="navbar navbar-expand-lg bg-dark">';
            echo '<div class="container-fluid">';
            echo '<a class="navbar-brand text-white" href="#">Snackbar Blauw</a>';
            echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
            echo '<span class="navbar-toggler-icon"></span>';
            echo '</button>';
            echo '<div class="collapse navbar-collapse" id="navbarNav">';
            echo '<ul class="navbar-nav">';
            echo ' <li class="nav-item">';
            echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/index.php">Home</a>';
            echo '</li>';
            echo '<li class="nav-item  ">';
            echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/loguit.php">Loguit</a>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo ' </nav>';
            echo '<h2 class="px-5 py-2">';
            echo 'welkom ';
            echo $naam;
            echo '</h2>';
        } else if ($_SESSION['rol'] == 'manager') {
            echo '<nav class="navbar navbar-expand-lg bg-dark">';
            echo '<div class="container-fluid">';
            echo '<a class="navbar-brand text-white" href="#">Snackbar Blauw </a>';
            echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
            echo '<span class="navbar-toggler-icon"></span>';
            echo '</button>';
            echo '<div class="collapse navbar-collapse" id="navbarNav">';
            echo '<ul class="navbar-nav">';
            echo ' <li class="nav-item">';
            echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/index.php">Home</a>';
            echo '</li>';
            echo ' <li class="nav-item">';
            echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/productaanmaken.php">productaanmaken</a>';
            echo '</li>';
            echo '<li class="nav-item  ">';
            echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/loguit.php">Loguit</a>';
            echo '</li>';         
            echo ' <li class="nav-item  ">';
            echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/updateaccount.php">update eigen account</a>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo ' </nav>';
            echo '<h2 class="px-5 py-2">';
            echo 'welkom ';
            echo $naam;
            echo '</h2>';
        }
    } else {
        echo '<nav class="navbar navbar-expand-lg bg-dark">';
        echo '<div class="container-fluid">';
        echo '<a class="navbar-brand text-white" href="#">Snackbar Blauw </a>';
        echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
        echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';
        echo '<div class="collapse navbar-collapse" id="navbarNav">';
        echo '<ul class="navbar-nav">';
        echo ' <li class="nav-item">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/index1.php">Home</a>';
        echo '</li>';
        echo '<li class="nav-item  ">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/snackbar/login.php">Login</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo ' </nav>';
    }


    ?>
</body>

</html>