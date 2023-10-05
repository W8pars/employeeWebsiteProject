<?php

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // instantiate signupcontroller class
    require "../empdb_config.php";
    require "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($email, $password);

    // error handling
    $login->loginUser();

    // going back to front page
    header("location: ../profile.php");
    exit();
}