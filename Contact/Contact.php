<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Infinite Measures</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Contact.css'>
    <script src='Contact.js'></script>
</head>
<body>
    <!--En-tête de page.-->
    <header>
        <img src="../img/logoIM.png" alt="logoIM" height="125" width="125">
        
        <p class="slogan">
            THE NEW INDUSTRY
        </p>

        <nav>
            <ul>
                <li class="button">
                    <a href="../Home/Home.php">
                        Home
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Solution/Solution.php">
                        Solution
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../About/About.php">
                        About
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Contact/Contact.php">
                        Contact
                    </a>
                    
                </li>

                <?php

                if(isset($_SESSION["email"])){
                    echo "<li class='button'><a href='../../Dashboard/Dashboard.php'>Dashboard</a></li>";
                    echo "<li class='button'><a href='php.scripts/logout.php'>Log out</a></li>";
                }
                else{
                    //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                    echo "<li class='button'><a href='Home.php'>Log in</a></li>";
                }
            ?>

            </ul>
        </nav>
    </header>
    

    
</body>
</html>