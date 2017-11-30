<div id="page">
        <div id="content">
            <div class="post">
                <h1 class="title"><?php echo $_GET['subcatnm']; ?></h1>
                <div class="entry">
                    <table border="4" width="100%" >
                        <br><br><br><br><br>
                        <?php
                        $k = ($page_current_page - 1) * $page_per_page;
                        echo $k."<br>";
                        $query = "select *from boek where b_subcat='$cat' LIMIT " . $k . "," . $page_per_page;
                        $res = mysqli_query($conn, $query) or die("Can't kkk Execute Query...");
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            if ($count == 0) {
                                echo '<tr>';
                            }
                            echo '<td valign="top" width="20%" align="center">
                                        <a href="detail.php?id=' . $row['b_id'] . '&cat=' . $_GET['subcatnm'] . '">
                                        <img src="' . $row['b_img'] . '" width="80" height="100">
                                        <br>' . $row['b_nm'] . '</a>
                                    </td>';
                            $count++;
                            if ($count == 2) {
                                echo '</tr>';
                                $count = 0;
                            }
                        }
                        ?>
                    </table>
                    <br><br><br>
                    <center>
                        <?php
                        if ($page_total_page > $page_current_page) {
                            echo '<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . ($page_current_page + 1) . '">Next</a>';
                        }
                        for ($i = 1; $i <= $page_total_page; $i++) {
                            echo '&nbsp;&nbsp;<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . $i . '">' . $i . '</a>&nbsp;&nbsp;';
                        }
                        if ($page_current_page > 1) {
                            echo '<a href="booklist.php?subcatid=' . $_GET['subcatid'] . '&subcatnm=' . $_GET['subcatnm'] . '&page=' . ($page_current_page - 1) . '">Previous</a>';
                        }
                        ?>
                    </center>
                </div>
            </div>
        </div>