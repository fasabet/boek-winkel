<!DOCTYPE html>
<?PHP include "extra/gfunction.php";
    echo showHeader(); 
?>
<?php session_start();?>
<!-- content -->               
<div id="coplex">
    <div id="sidebar">
        <div class="sidebar">
            <?PHP include "extra/sidebar.php"; ?>
        </div>
    </div>
    <div id="main">
        <div class="entry">
            <div id="content">
                <div class="post">
                    <h1 class="title">Welcome 
                        <?php
                        if (isset($_SESSION['status'])) {
                            echo $_SESSION['unm'];
                        } else {
                            echo 'to Boek Winkel';
                        }
                        if(isset($_SESSION['status'])){
                            echo '<li><a href="logout.php"><h6>Logout</h6></a></li>';
                        }
                        else {
                            echo '<li><a href="register.php"><h6>Register</h6></a></li>';
                        }
                    ?>
                    </h1>
                    <div class="entry">
                        <div id="header" >
                            <div id="topbar" >
                                <div class="topmenue">
                                    <ul>
                                        <li><a href="3">add Book</a></li>
                                        <li><a href="3">add categori and subcategori</a></li>
                                        <li><a href="#">contact</a></li>
                                        <li><a href="#">9999</a></li>
                                        <li><a href="#">8888</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
        <?PHP echo showfooter(); ?>
    </body>
</html>
