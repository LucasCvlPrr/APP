<?php

    function emptyInputSignup($last_name, $first_name, $email, $pseudo, $password, $repeat_password){
        $result;
        if(empty($last_name) || empty($first_name) || empty($email) || empty($pseudo) || empty($password) || empty($repeat_password)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidPseudo($pseudo){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $pseudo)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function passwdMatch($password,$repeat_password){
        $result;
        if($password !== $repeat_password){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function pseudoOrEmailExists($conn, $pseudo, $email){
        $sql = "SELECT * FROM users WHERE pseudo = ? OR email = ?;"; //requete SQL
        $stmt = mysqli_stmt_init($conn); //prepared statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../Register.php?error=stmtfailed"); //retour à la page de Register avec l'erreur 'stmtfailed'
            exit(); 
        }

        mysqli_stmt_bind_param($stmt, "ss", $pseudo, $email); // "ss" because two string are transmited
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $last_name, $first_name, $email, $pseudo, $password){
        $sql = "INSERT INTO users (last_name, first_name, email, pseudo, passwd) VALUES (?, ?, ?, ?, ?);"; //requete SQL
        $stmt = mysqli_stmt_init($conn); //prepared statement
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../Register.php?error=stmtfailed"); //retour à la page de Register avec l'erreur 'stmtfailed'
            exit(); 
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //secu avec hashing des passwords

        mysqli_stmt_bind_param($stmt, "sssss", $last_name, $first_name, $email, $pseudo, $hashedPassword); // "sssss" because two string are transmited
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../Register.php?error=none");
        exit();
    }