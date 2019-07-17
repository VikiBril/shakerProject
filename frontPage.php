<?php  session_start();
    if(!isset($_SESSION['user_id']))
        header("Location: index.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="includes/style.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <meta charset="UTF-8">
            <title>Shaker</title>
        </head>
        
        <body>
            <header>
                <nav id="study_menu">
                    <div id="left_study">
                            <a href="#" id="indu_logo" class="logos" alt='mypic'><span>תעשייתית</span></a>
                            <a href="#" id="chemical_logo" class="logos" alt='mypic'><span>כימית</span></a>
                            <a href="#" id="mang_logo" class="logos" alt='mypic'><span>תעו״נ</span></a>
                            <a href="#" id="software_logo" class="logos" alt='mypic'><span>תוכנה</span></a>
                            <a href="#" id="plastic_logo" class="logos" alt='mypic'><span>פלסטיקה</span></a>
                            <a href="#" id="electric_logo" class="logos" alt='mypic'><span>חשמל</span></a>
                        </div>
                    <a href="frontPage.php" id="logo_shaker" class="logos" alt='mypic'></a>
                    
                    <div id="right_study">
                            <a href="#" id="art_logo" class="logos" alt='mypic'><span>אומנות</span></a>
                            <a href="#" id="graphic_logo" class="logos" alt='mypic'><span>גרפי</span></a>
                            <a href="#" id="textile_logo" class="logos" alt='mypic'><span>טקסטיל</span></a>
                            <a href="#" id="fashion_logo" class="logos" alt='mypic'><span>אופנה</span></a>
                            <a href="#" id="jewllery_logo" class="logos" alt='mypic'><span>תכשיטים</span></a>
                            <a href="#" id="inside_logo" class="logos" alt='mypic'><span>פנים</span></a>
                    </div>
                </nav>
                <nav id="pref_menu">
                        <div id="right_pref">
                            <a href="frontPage.php" class="selected">שייקר<span>מה בא לך לראות</span></a>
                            <a href="#">העשרה<span>סדנאות, קורסים, משרות</span></a>
                            <a href="#">תפריט<span>פרוייקטים משותפים</span></a>
                            <a href="#">מזווה<span>לינקים, לוחות השראה</span></a>
                            <a href="#">? בא לך משהו אחר<span>חפש/י חופשי</span></a>
                        </div>
                        <div id="left_pref"  class=<?php echo '"'.$_SESSION['user_id'].'"';?>>
                            <a href="#" id="bell_logo"  class="logos" alt='mypic'></a>
                            <a href="#" id="heart_logo"  class="logos" alt='mypic'></a>
                            <a href="start_new_proj.php" id="plus_logo"  class="logos" alt='mypic'></a>
                            <a href="#" id="user_logo" class="logos" alt='mypic'></a>

                        </div>
                </nav>
            </header>
            <div id="wrapper"></div>
        </body>
        <script src="showData.js"></script>
    </html>
    