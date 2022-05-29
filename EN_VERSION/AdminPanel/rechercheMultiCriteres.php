<?php
$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'admin', 'admin');
if(isset($_POST['submit'])){
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];

    $results = $bdd->query("SELECT * FROM users WHERE pseudo LIKE $pseudo + '%' AND WHERE email LIKE $email + '%' AND WHERE last_name LIKE $last_name + '%' AND WHERE first_name LIKE $first_name + '%'");
    $users = $results->fetchAll(); //recup toutes les données
}
?>