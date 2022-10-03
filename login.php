<?php
include "navigatie.php";

if (isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '') {
    //code wordt uitgevoerd als het formulier goed wordt ingevuld

    require 'database.php';
    $wachtwoord = $_POST['password'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM gebruikers WHERE email ='$email' AND wachtwoord ='$wachtwoord'";
    // $sql = "SELECT * FROM gebruikers WHERE wachtwoord ='$wachtwoord'";

    $result = $mysqli->query($sql);

    $rows = $result->fetch_assoc(); // 1 rij zetten naar een associate array 

    
    print_r($rows);


    $_SESSION['rol'] = $rows['rol'];

    $_SESSION['gebruiker_id'] = $rows['id'];
    $_SESSION['naam'] = $rows['voornaam'];

    print_r($rows);

    header("location: index.php");
} else {
    // echo 'fill out the form';
}
?>

<div class="container py-5 px-5">
    <div class="row py-5 px-5">
        <div class="col py-5 px-5">



            <form class="py-5 px-5" method="POST" action="login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="link">
                    Dont have a account? register <a href="http://localhost/eindproject/register.php" class="link-primary">here.</a>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit" name="submit">Login</button>
                </div>

            </form>







        </div>
    </div>
</div>