<?php
    include 'db.php';

    //Get param from form
    $proj = $_POST["proj"];
    $notes = $_POST["notes"];

    //insert data to DB
    $update_query = "UPDATE tbl_projects_206 
    SET notes = '$notes'
    WHERE proj_id ='$proj'";

    $result2 = mysqli_query($connection, $update_query);
    if(!$result2) 
      echo 'false';
    else 
      echo 'true';//header("Location: frontPage.html");
?>