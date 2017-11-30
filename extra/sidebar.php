<ul>
        <li id="login">
            <?php
            require('extra/config.php');
            if (isset($_SESSION['status'])) {
                echo '<h4>Hello   ' . $_SESSION['unm'] . '</h4>';
            } else {
                echo '<form action="pro_login.php" method="POST">
                        <br>
                        <h3>LogIn</h3>
                        <b>Username:</b>
                        <br><input type="text" id="u" name="usernm"><br>
                        <br>
                        <b>Password:</b>
                        <br><input type="password" id="t" name="pwd">
                        <br><br>
                        <input id="logside" type="submit" id="x" value="Login">
                        <br><br>
                    </form>';
            }
            ?>
        </li>
<h2>Categories</h2>
<br>
    <?php
    $conn=mysqli_connect("localhost","root","","boewin")or die("Can't Connect...");
    $query = "select * from cate ";
    $res = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        echo '<li><a href="showbook0.php?cat=' . $row['cat_id'] . '&catnm=' . $row["cat_nm"] . '">' . $row ['cat_nm'] . '</a></li><br>';
    }
    mysqli_close($conn);
    ?>
</ul>
         