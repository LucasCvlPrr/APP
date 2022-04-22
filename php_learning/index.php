<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form_connection">

        <h3>Time to login:</h3><br>

        <form method="POST" action="">

            <div class="pseudo_div">
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" autocomplete="off"><br>
            </div>

            <div class="password_div">
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" autocomplete="off">
            </div>

            <div class="submit_div">
                <button type="submit" name="submit" id="submit">Login</button>
            </div>

            <?php
                if(isset($_POST['submit'])){
                    if(!empty($_POST['email']) and !empty($_POST['password'])){
                        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                        $recupUser->execute(array($_POST['email']));
                        if($recupUser->fetch()['isAdmin'] == 1){
                            $_SESSION['email'] = $_POST['email'];
                            $_SESSION['password'] = $_POST['password'];
                            header('Location: adminSpace.php');
                        } else {
                            echo "<p>You are not an admin !</p>";
                            header('Location: chat.php');
                        }
                    } else {
                        echo "<p>Please enter a pseudo and a password ...</p>";
                    }
                }
            ?>

        </form>
    </div>
</body>

</html>