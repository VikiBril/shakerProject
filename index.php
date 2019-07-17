<?php
    include 'db.php';
    
    session_start();
    if(!empty($_POST["loginMail"])){
        $check_query = "SELECT * FROM tbl_users_206 WHERE email='"
        . $_POST["loginMail"]
        ."' AND password = '"
        . $_POST["loginPass"]
        ."'";
        

        $check_result = mysqli_query($connection , $check_query);
        $row = mysqli_fetch_array($check_result);
        if(is_array($row)) {
            $var = ($row["user_id"]);
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: frontPage.php");
        } else {
            $message = "Invalid Username or Password!";
        }
    }
    mysqli_close($connection);
?>

<!DOCTYPE html>
    <html>
        <head>
                <meta name="viewport" content="width=device-width, initial scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="./includes/style_new_proj.css">
                <meta charset="UTF-8">
                <title>Login Page</title>
        </head>

        <body>
            <header>
                <h1>שייקר - שיתופי פעולה בין סטודנטים</h1>
            </header>
                    <div class="container">
                        <h1>Login</h1>
                        <form action="#" method="post" id="frm">
                        <div class="form-group">
                        <label for="loginMail">Email: </label>
                        <input type="email" class="form-control" name="loginMail" id="loginMail"
                        aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password: </label>
                        <input type="password" class="form-control" name="loginPass" id="loginPass"
                        placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Log Me In</button>
                        <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                        </form>
                    </div>
                <aside>
                    <img src="./images/Shaker_logo.png" alt="mypic">
                </aside>
        </body>

        <script src="showData.js"></script>
    </html>
