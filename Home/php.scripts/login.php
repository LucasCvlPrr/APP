<?php

    if(isset($_POST["submit"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once '../../Config/database.php';
        require_once '../../Config/functions.include.php';

        if(emptyInputLogin($email, $password) !== false){
            header("location: ../../index.php?error=emptyinput"); //retour à la page de Home avec l'erreur 'emptyinput'
            exit(); //vide le form en cours
        }

        loginUser($conn, $email, $password);
    }
    else{
        header("location: ../../index.php");
        exit();
    }


