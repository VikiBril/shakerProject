<?php 
    include 'db.php';

    $q = "SELECT * FROM tbl_users_206 WHERE user_id = '"
        . $_POST["userid"]."'";

    $res = mysqli_query($connection , $q);
    $row = mysqli_fetch_array($res);

    echo $row['admin'];
?>
