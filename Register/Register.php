<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Infinite Measures</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Register.css'>
    <script src='Register.js'></script>
</head>
<body>
    <!--En-tête de page.-->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                THE NEW INDUSTRY
            </p>

            <!-- Menu de navigation -->
            <ul>
                <li class="button">
                    <a href="../Home/Home.php">
                        Home
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Solution/Solution.html">
                        Solution
                    </a>

                </li>

                <li class="button">
                    <a href="../About/About.html">
                        About
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Contact/Contact.html">
                        Contact
                    </a>
                    
                </li>
            </ul>

            <img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">


        </nav>

        
    </header>

    <!-- Contenu -->
    <h1>REGISTER TO USE OUR SOFTWARES</h1>

    <div class="RegisterPreview">
        
        <div class="RegisterFormContainer">
            <h4 class="RegisterFormTitle"></h4>

            <form action="php.scripts/register.include.php" method="post" class="RegisterinForm">
                <div class="lastNameInput">
                    <div class="lastNameLabel">
                        <label for="last_name">Last Name</label>
                    </div>

                    <div class="last_name">
                        <input type="text" name="last_name" id="last_name" required size="50px">
                    </div>
                </div>
                
                <div class="firstNameInput">
                    <div class="firstNameLabel">
                        <label for="first_name">First Name</label>
                    </div>
                    
                    <div class="first_name">
                        <input type="text" name="first_name" id="first_name" required size="50px">
                    </div>
                </div>

                <div class="emailInput">
                    <div class="emailLabel">
                        <label for="email">Email</label>
                    </div>
                    
                    <div class="email">
                        <input type="text" name="email" id="email" required size="50px">
                    </div>
                </div>

                <div class="pseudoInput">
                    <div class="pseudoLabel">
                        <label for="pseudo">Pseudo</label>
                    </div>
                    
                    <div class="pseudo">
                        <input type="text" name="pseudo" id="pseudo" required size="50px">
                    </div>
                </div>

                <div class="passwordInput">
                    <div class="passwordLabel">
                        <label for="password">Password</label>
                    </div>
                    
                    <div class="password">
                        <input type="password" name="password" id="password" required size="50px">
                    </div>
                </div>

                <div class="repeatpasswordInput">
                    <div class="repeatpasswordLabel">
                        <label for="repeatpassword">Repeat Password</label>
                    </div>
                    
                    <div class="repeatpassword">
                        <input type="password" name="repeatpassword" id="repeatpassword" required size="50px">
                    </div>
                </div>

                <div class="registerBtn">
                    <button type="submit" name="formsend" id="formsend">Submit</button>
                </div>

            </form>

            <?php 
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>You missed a blank, fill the other !</p>";
                    }
                    else if($_GET["error"] == "invalidpseudo"){
                        echo "<p>Invalid Pseudo, choose another one !</p>";
                    }
                    else if($_GET["error"] == "invalidemail"){
                        echo "<p>Invalid Email, choose another one !</p>";
                    }
                    else if($_GET["error"] == "invalidpasswdmatch"){
                        echo "<p>Passwords don't match, try again !</p>";
                    }
                    else if($_GET["error"] == "pseudooremailtaken"){
                        echo "<p>Pseudo or Email already used ...</p>";
                    }
                    else if($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, try again !</p>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p>You have signed up !</p>";
                    }
                }

            ?>
        </div>
    </div>

    <!-- Pied de page -->
    <footer class="footer">
        <div class="principalFooter">
            <h2 class="infiniteMeasuresFooter"><br>INFINITE<br>MEASURES</h2>

            <hr class="footerSeparator">

            <div class="footerLinks">
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
                        <a href="../Contact/Contact.html">
                            Contact
                        </a>
                        
                    </li>
    
                    <li class="link">
                        <a href="">
                            Sitemap
                        </a>
                        
                    </li>
                </ul>
            </div>
        </div>

        <div class="secondaryFooter">
            <p class="poweredBy">Powered by</p>
            <p class="oversight">Oversight</p>
        </div>
    </footer>
    
</body>
</html>