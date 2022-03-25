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
    <link rel='stylesheet' type='text/css' media='screen' href='Solution.css'>
    <script src='Solution.js'></script>
</head>
<body>
    <!-- Header -->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                THE NEW INDUSTRY
            </p>

            <!-- Navigation Menu -->
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

                <?php

                if(isset($_SESSION["email"])){
                    echo "<li class='button'><a href='../Dashboard/Dashboard.php'>Dashboard</a></li>";
                    echo "<li class='button'><a href='../Home/php.scripts/logout.php'>Log out</a></li>";
                }
                else{
                    //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                    echo "<li class='button'><a href='Home.php'>Log in</a></li>";
                }
            ?>

            </ul>

            <img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">


        </nav>

        
    </header>

     <!-- Content -->
     <div class="topImg">
        <img class="solutionPageImg" src="../img/solutionPageImg.jpg" alt="solutionPageImg">
    </div>
  
    <hr class="firstLineSeparator">

    <div class="titleContainer">
        <h1><br> OUR SOLUTION FOR YOUR FACTORY <br></h1>
    </div>

    <div class="solutionPresentation">
        <div class="envirronment">
            <h4 class="envirronmentAnalysing">Envirronment analysing</h4>

            <p class="envirronmentText">Our POLLUTION and SOUND sensors were designed to be integrated on a full solution for a live detection of potential risks.</p>

            <div class="envirronmentSensors">
                <div class="pollutionSensor">
                    <img class="pollutionImg" src="../img/co2.PNG" alt="pollutionImg">
                    <h4 class="pollutionSensorTitle">POLLUTION SENSOR</h4>
                </div>
        
                <div class="soundSensor">
                    <img class="soundImg" src="../img/sound.PNG" alt="soundImg">
                    <h4 class="soundSensorTitle">SOUND SENSOR</h4>
                </div>
            </div>
        </div>

        <div class="workers">
            <h4 class="workersHealth">Workers' Health</h4>

            <p class="workersText">We protect our users with HEART sensor for the prevention  and justification for work incidents.</p>
            
            <div class="workersSensors">
                <div class="heartBeatSensor">
                    <img class="heartBeatImg" src="../img/heartBeat.png" alt="heartBeatImg">
                    <h4 class="heartBeatSensorTitle">HEART BEAT SENSOR</h4>
                </div>
            </div>
        </div>
    </div>

    <hr class="secondLineSeparator">

    <div class="industryInfo">
        <h1>Why working for the industry?</h1>

        <div class="industryNumbers">
            <h4><br> Some clue numbers about the industry <br></h4>
        </div>
    </div>


    <!-- Footer -->
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
            <p class="poweredBy">Powered by <span style="color: #52cde1;">Oversight</span></p>
        </div>
    </footer>
    

    
</body>
</html>