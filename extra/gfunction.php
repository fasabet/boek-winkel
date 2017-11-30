<?php
function showHeader(){
$returnString = <<<HEADSTRING
<?php session_start();?>
<html>    
   <head>
         
        <?php require('extra/config.php'); ?>
        <title>Boek Winkel ITPH</title>
        <link rel="icon" type="imag/png" href="images/itphlogo.png">
        <meta charset="UTF-8">
        <meta name="keywords" content="">
        <meta name="description" content="student progerramma ITPH" >        
        <link href="extra/defult.css" rel="stylesheet" type="text/css" >
    </head>
<!-- header -->
    <body>
            <div id="header" >
                <div id="topbar" >
                    <div class="topmenue">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="#">contact</a></li>
                            <li><a href="aboutus.php">about us</a></li>
                            <li><a href="#">view cart</a></li>
                        </ul>
                    </div>
                </div>
                <div id="logobar" >
                    <div id="itphgroup">
                        <marquee  direction="right" behavior="alternate"><img src="images/itph.png" alt="itphlogo" height="35" width="160" ></marquee>
                        <h1 class="itph">ITPH Academy</h1><h2>Boek Winkel</h2>
                        <h3 class="itphmotto">Skills for your digital future</h3>
                    </div>
                </div>
HEADSTRING;
    return $returnString;
}
function showfooter(){
$returnString = <<<HEADSTRING
        <div id="footer">
            <p id="legal"><img src="images/itph.png" alt="itphlogo" height="35" width="160">2017 Design by Farshid in<a href="http://www.itph-academy.nl/">
                ITPH Academy ( Skills for your digital future)</a></p>
        </div>
HEADSTRING;
    return $returnString;
}
function showsidebar(){
$returnString = <<<HEADSTRING
        
HEADSTRING;
    return $returnString;
}
?>