<?php
    include "db.php";

    $projId = $_GET['variable'];
    
    //get data from DB
    $select_query = "SELECT * FROM tbl_projects_206 WHERE proj_id= '$projId'";
    $result = mysqli_query($connection, $select_query);
    if(!$result) {
        die("DB query failed.");
    }
    
    $row = mysqli_fetch_array($result);
    echo json_encode($row); 
?>
