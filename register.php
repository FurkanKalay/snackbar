<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit

    if (
        !empty($_POST["voornaam"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn 
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["date"])

    ) {


        $voornaam = $_POST["voornaam"]; // variabeles aan het zetten door post method te gebruiken
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["date"];

        $rol = "klant";

        //database connectie
        include 'database.php';


        $sql = "INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord, telefoonnummer, geboortedatum, rol)
                VALUES ('$voornaam', '$achternaam','$email', '$wachtwoord', '$telefoonnummer','$geboortedatum','$rol')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden 
        header("location: login.php");
    }
}
include "navigatie.php"; ?>

<div class="container py-5 px-5">
    <div class="row py-5 px-5">
        <div class="col py-5 px-5">


            <form class="py-5 px-5 " method="POST" action="register.php">
                <div class="form-group">
                    <label for="exampleInputUser1">Name</label>
                    <input type="text" class="form-control" id="voornaam" name="voornaam" aria-describedby="userHelp" placeholder="Enter Username">

                </div>
                <div class="form-group">
                    <label for="exampleInputUser1">Surname</label>
                    <input type="text" class="form-control" id="achternaam" name="achternaam" aria-describedby="userHelp" placeholder="Enter Username">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyon else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phonenumber</label>
                    <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyon else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Password">
                </div>

                <div class="bootstrap-iso">
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <!-- Form code begins -->
                                <form method="post">
                                    <div class="form-group">
                                        <!-- Date input -->
                                        <label class="control-label" for="date">Date</label>
                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
                                    </div>
                                    <div class="form-group py-5">
                                        <!-- Submit button -->
                                        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                    </div>
                                </form>
                                <!-- Form code ends -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="link">
                    Already have a account? Log in <a href="http://localhost/eindproject/login.php" class="link-primary">here.</a>
                </div>

            </form>







        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })
</script>