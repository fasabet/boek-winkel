<?php
    require('extra/config.php');
    session_start();
    $cat = $_GET['cat_nm'];
    $q = "select * from subcate where parent_id = " . $_GET['cat'];
    $res = mysqli_query($conn, $q) or die("Can not Execute Query..");
    $row1 = mysqli_fetch_assoc($res);
    if ($_GET['catnm'] == $row1['subcat_nm']) {
        header("location:showbook.php?subcatid=" . $row1['subcat_id'] . "&subcatnm=" . $row1["subcat_nm"]);
    }
?>