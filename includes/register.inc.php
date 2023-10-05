<?php

if(isset($_POST["submit"])) {
    
    $errors = array();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $ssn = $_POST['ssn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // instantiate signupcontroller class
    include "../empdb_config.php";
    include "../classes/dbh.classes.php";
    include "../classes/register.classes.php";
    include "../classes/register-contr.classes.php";
    $register = new RegisterContr($firstName, $lastName, $address, $phone, $salary, $ssn, $email, $password, $username);

    // error handling
    $register->registerUser();

    // going back to front page
    header("location: ../index.php?error=none");
    exit();
}