<?php


include 'database.php';
session_start();



if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["id"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn


    ) {
        // variabeles aan het zetten door post method te gebruiken
        $quantity = $_POST["quantity"];
        $productid = $_POST["id"];


        $datum = date("Y-m-d");

        $status = "verwerken";
        $userid =  $_SESSION['gebruiker_id'];
        //database connectie



        $sql = "INSERT INTO order (user_id, product_id, quantity, status, due_datetime)
                VALUES ('$userid', '$productid','$quantity','$status','$datum')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: index.php");
    }
}