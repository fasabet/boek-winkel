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
        <!-- main -->     
            <div id="main">
                <div id="content">
                    <div class="post">
                        <h1 class="title">Welcome to Registeration.</h1>
                        <div class="entry">
                            <br><br>
                            <?php
                            if (isset($_GET['error'])) {
                                echo '<font color="red">' . $_GET['error'] . '</font>';
                                echo '<br><br>';
                            }
                            if (isset($_GET['ok'])) {
                                echo '<font color="blue">You are successfully Registered..</font>';
                                echo '<br><br>';
                            }
                            ?>
                            <table>
                                <form action="pro_register.php" method="POST">
                                    <tr>
                                        <td><b>Full Name :</b>&nbsp;&nbsp;</td>
                                        <td><input type='text' size="30" maxlength="30" name='fnm'></td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>User Name :</b>&nbsp;&nbsp;</td>
                                        <td><input type='text' size="30" maxlength="30" name='unm'></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>Password :</b>&nbsp;&nbsp;</td>
                                        <td><input type='password' name='pwd' size="30"></td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
                                        <td><input type='password' name='cpwd' size="30"></td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>Gender:</b>&nbsp;&nbsp;</td>
                                        <td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
                                            <input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
                                        <td><input type='text' name='mail' size="30"></td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>Contact No.:</b>&nbsp;&nbsp;</td>
                                        <td><input type='text' name='contact' size="30"></td>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td><b>City:</b>&nbsp;&nbsp;</td>
                                        <td>
                                            <select style="width: 195px;" name="city">
                                                <option>Emmeloord
                                                <option>Emmen
                                                <option>Amsterdam
                                                <option>Eindhoven
                                                <option>Appeldorn
                                                <option>Rormond
                                                <option>Urk
                                                <option>Rotterdam
                                                <option>Kampen
                                                <option>Hochoveen
                                                <option>Lemer
                                                <option>Bant
                                                <option>Zwolle
                                            </select>
                                    </tr>
                                    <tr><td>&nbsp;</tr>
                                    <tr>
                                        <td colspan='2' align='center'>
                                            <input type='submit' value="  OK  ">
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        <!-- footer -->
        <?PHP echo showfooter(); ?>
    </body>
</html>
