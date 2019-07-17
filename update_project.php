<?php
    include 'db.php';

    //Get param from form
    $projToDel = $_GET["projToDel"];
    $project_name = $_GET["projName"];
    $project_pic = $_GET["picture"];
    $project_collab = $_GET["collab"];
    $project_desc = $_GET["description"];

    //insert data to DB
    $update_query = "UPDATE tbl_projects_206 
    SET name = '$project_name', picture = '$project_pic', collab = '$project_collab', description = '$project_desc'
    WHERE proj_id ='$projToDel'";

    $result2 = mysqli_query($connection, $update_query);
    if(!$result2) 
      echo 'false';
    else 
      echo 'true';//header("Location: frontPage.html");
?>



