<?php
    include "db.php";
    include "config.php";


    //get data from DB
    $select_query = "SELECT * FROM `tbl_projects_206` ;";
    $result = mysqli_query($connection, $select_query);
    if(!$result) {
        die("DB query failed.");
    }
    
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr,$row);
    }
    echo utf8_encode(json_encode($arr)); 
    mysqli_close($connection);

?>