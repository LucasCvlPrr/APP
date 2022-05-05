<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
if(isset($_GET['id'])){
    $selectUser = $bdd->prepare('SELECT * from users WHERE id=?');
    $selectUser->execute(array($_GET['id']));
    if($selectUser->rowCount() > 0){
        $deleteUser = $bdd->prepare('DELETE from users WHERE id=?');
        $deleteUser->execute(array($_GET['id']));
        header("Location: adminPanel.php");
    } else {
        echo "The select user doesn't exist ...";
    }
} else {
    echo "ERROR, the 'id' is invalid !";
}
?>