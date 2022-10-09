<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["name"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn
        && !empty($_POST["kosten"])
        && !empty($_POST["verkoop"])
        && !empty($_POST["category"])


    ) {
        $name = $_POST["name"]; // variabeles aan het zetten door post method te gebruiken
        $kosten = $_POST["kosten"];
        $verkoop = trim($_POST["verkoop"]);
        $category = $_POST["category"];




        //database connectie
        include 'database.php';


        $sql = "INSERT INTO product (name, cost_price, selling_price, category)
                VALUES ('$name', '$kosten','$verkoop', '$category')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: index.php");
    }
}
include "navigatie.php"; ?>

<div class="container py-5 px-5">
    <div class="row py-5 px-5">
        <div class="col py-5 px-5">


            <form class="py-5 px-5 " method="POST" action="productaanmaken.php">
                <div class="form-group">
                    <label for="exampleInputUser1">Name</label>
                    <input type="text" class="form-control" id="voornaam" name="name" aria-describedby="userHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputUser1">kosten</label>
                    <input type="text" class="form-control" id="achternaam" name="kosten" aria-describedby="userHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">verkoop prijs</label>
                    <input type="text" class="form-control" id="email" name="verkoop" aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Selecteer categorie</label>

                    <select name="category" id="category">
                        <option value="foods">foods</option>
                        <option value="drinks">drinks</option>

                    </select>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit" name="submit">Make</button>
                </div>



            </form>







        </div>
    </div>
</div>