<?php
session_start();
if($_SESSION['email'] == false or $_SESSION['password'] == false){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Space</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="global">
        <div class="admin_info">
            <h3>Welcome to the Admin dashboard !</h3><br>
            <?php
                $email = $_SESSION['email'];
                $password =  $_SESSION['password'];
                
                echo "<p>Your pseudo : ".$email."</p><br>";
                echo "<p>Your password : ".$password."</p>";

                //récupération 'isAdmin'
                $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                $recupUser->execute(array($_SESSION['email']));
                $isAdmin = $recupUser->fetch()['isAdmin'];
                echo "<p>isAdmin : ".$isAdmin."</p>";
            ?>
        </div>
        <div class="users_list">
                <h3>The list of the users:</h3><br>
                <?php
                    //récupération de tous les utilisateurs
                    $recupUsers = $bdd->query('SELECT * FROM users');
                    while($user = $recupUsers->fetch()){
                        ?>
                            <p><?= $user['pseudo']; ?><a id='ban_link' href="ban.php?id=<?= $user['id']; ?>" style="color:white; background-color:red; text-decoration:none;margin-left:5px;border-radius:5px;padding:5;">Ban this user</a></p>
                        <?php
                    }
                ?>
        </div>
    </div>
</body>
</html>