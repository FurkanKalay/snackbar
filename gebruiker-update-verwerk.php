<?php
if (isset($_POST["submit"])) {

    $id = $_POST["id"];

    if (
        !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["geboortedatum"])
    ) {
        //var_dump($_POST);
        //allemaal moeten ze true zijn
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = htmlentities($_POST['geboortedatum']);
        $date = date('Y-m-d', strtotime($geboortedatum));

        //database connectie

        require 'database.php';

        $sql = "UPDATE gebruikers SET
         voornaam = '$voornaam',
         achternaam = '$achternaam',
         email = '$email',
         wachtwoord = '$wachtwoord',
         geboortedatum = '$date',
         telefoonnummer = '$telefoonnummer'
          WHERE id = ' $id' ";

        // Voer de INSERT INTO STATEMENT uit

        // var_dump(mysqli_query($conn, $sql));
        // die;

        if (mysqli_query($conn, $sql)) {
            header("location: gebruikeroverzicht.php");
        }

        //echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding

    } else {
        header("location: gebruiker-update.php?id=$id");
    }
}
