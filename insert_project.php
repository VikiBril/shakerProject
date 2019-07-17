<?php
    include 'db.php';

    //Get param from form
    $project_name = $_GET["projName"];
    $project_pic = $_GET["picture"];
    $project_collab = $_GET["collab"];
    $project_desc = $_GET["description"];

    //insert data to DB
    $insert_query = "INSERT INTO tbl_projects_206 (name, picture , collab, description)
     values ('$project_name','$project_pic','$project_collab','$project_desc')";

    $result2 = mysqli_query($connection, $insert_query);
    if(!$result2) 
      echo 'false';
    else 
      header("Location: frontPage.php");
?>