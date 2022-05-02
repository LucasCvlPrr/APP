<!-- Initialisation -->

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
    <link rel="icon" type="image/png" href="../img/factorypng.png">
    <script src='Contact.js'></script>
</head>
<body>
    
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- En-tête de page -->

    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" class="logoIM">

            <p class="slogan">
                THE NEW INDUSTRY ♻️
            </p>

            <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            <!-- Menu de navigation -->

            <ul>
                <li class="button">
                    <a href="../index.php">
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
                        echo "<li class='button'><a href='../index.php'>Log in</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Contenu -->
    <div class="ContactFormContainer">
        <div class="ContactFormTitle">
            <h4>Contact us</h4>
        </div>
        


        <form action="php.scripts/contact.include.php" method="post">
            <div class="firstNameInput">
                <div class="firstNameLabel">
                    <label for="first_name">First Name</label>
                </div>

                <div class="first_name">
                    <input type="text" id="first_name" name="first_name" required size="50px" placeholder="Your name...">
                </div>
            </div>
            
            <div class="lastNameInput">
                <div class="lastNameLabel">
                    <label for="last_name">Last Name</label>
                </div>

                <div class="last_name">
                    <input type="text" id="last_name" name="last_name" required size="50px" placeholder="Your last name...">
                </div>
            </div>

            <div class="emailInput">
                <div class="emailLabel">
                    <label for="email">Email</label>
                </div>
                
                <div class="email">
                    <input type="text" name="email" id="email" required size="50px" placeholder="Your email...">
                </div>
            </div>
            <div class="messageInput">
                <div class="messageLabel">
                    <label for="message">Message</label>
                </div>

                <div class="message">
                    <textarea id="message" name="message" style="height:200px; width:381px" placeholder="Write something.."></textarea>
                </div>
            </div>
            
            <div class="sendBtn">
                <button type="submit" name="formsend" id="formsend">Send</button>
            </div>

        </form>

    </div> 


    <div class="thanks">
        <?php 
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<h1>You missed a blank, fill the other !</h1>";
                }
                else if($_GET["error"] == "none"){
                    echo "<h1>Thank you for your interest!</h1>";
                }
            }

        ?>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Pied de page -->

    <footer class="footer">
        <ul>
            <li class="link">
                <a href="">
                    Legal Terms
                </a>

            </li>

            <li class="link">
                <a href="">
                    Personnal Data
                </a>

            </li>

            <li class="link">
                <a href="../Contact/Contact.php">
                    Contact
                </a>

            </li>

            <li class="link">
                <a href="">
                    Sitemap
                </a>

            </li>
        </ul>

        <div class="poweredByOversight">
            <p class="poweredBy">Powered by <a href="../About/OversightTeam/OversightTeam.php" class="oversight">Oversight</a></p>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>