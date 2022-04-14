<?php

    if(isset($_POST["formsend"])){

        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $email = $_POST["email"];
        $pseudo = $_POST["pseudo"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeatpassword"];
        
        require_once '../../Config/database.php'; //connection à la DB
        require_once '../../Config/functions.include.php'; //import de fontions

        if(emptyInputSignup($pseudo, $last_name, $first_name, $email, $password, $repeat_password) !== false){
            header("location: ../Register.php?error=emptyinput"); //retour à la page de Register avec l'erreur 'emptyinput'
            exit(); //vide le form en cours
        }

        if(invalidPseudo($pseudo) !== false){
            header("location: ../Register.php?error=invalidpseudo"); //retour à la page de Register avec l'erreur 'invalidpseudo'
            exit(); 
        }

        if(invalidEmail($email) !== false){
            header("location: ../Register.php?error=invalidemail"); //retour à la page de Register avec l'erreur 'invalidemail'
            exit(); 
        }

        if(invalidPasswd($password) !== false){
            header("location: ../Register.php?error=invalidpasswd"); //retour à la page de Register avec l'erreur 'invalidpasswd'
            exit();
        }

        if(passwdMatch($password, $repeat_password) !== false){
            header("location: ../Register.php?error=invalidpasswdmatch"); //retour à la page de Register avec l'erreur 'invalidpasswdmatch'
            exit(); 
        }

        if(pseudoOrEmailExists($conn, $pseudo, $email) !== false){
            header("location: ../Register.php?error=pseudooremailtaken"); //retour à la page de Register avec l'erreur 'pseudooremailtaken'
            exit();
        }

        $pseudo.=passwdStrengh($password); 

        createUser($conn, $last_name, $first_name, $email, $pseudo, $password);

    } else { //secu pour ne pas pouvoir atteindre le script depuis un lien web
        header("location: ../Register.php");
        exit();
    }