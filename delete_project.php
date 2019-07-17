<?php
    include 'db.php';

    //Get param from form
    $projToDel = $_GET["projToDel"];

    //insert data to DB
    $delete_query = "DELETE FROM tbl_projects_206 WHERE proj_id ='$projToDel'";

    $result2 = mysqli_query($connection, $delete_query);
    if(!$result2) 
      echo 'false';
    else 
      echo 'true';//header("Location: frontPage.html");
?>



