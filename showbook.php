<?php
require('extra/config.php');
 session_start();
 
    
	$cat=$_GET['subcatid'];
	$totalq="select count(*) \"total\" from boek where b_subcat='$cat'";
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	$page_per_page=6;
	$page_total_rec=$totalrow['total'];
	$page_total_page=ceil($page_total_rec/$page_per_page);
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
?>
<!DOCTYPE html>
<?PHP include "extra/gfunction.php";
    echo showHeader(); 
?>
        <!-- content -->               
            </div>
        <div id="coplex">
            <div id="sidebar">
                <?PHP include "extra/sidebar.php"; ?>
            </div>
            <div id="main">
                <?PHP include "extra/show.php"; ?>
            </div>
        </div>
        <!-- footer -->
        <?PHP echo showfooter(); ?>
    </body>
</html>
