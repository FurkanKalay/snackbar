<?php
session_start();


if (isset($_SESSION['rol'])) {
    session_unset();
    header("Location: index1.php");
}
