<?php session_start();
if (!isset($_SESSION['user_id']))
  header("Location: index.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./includes/style_new_proj.css">
  <meta charset="UTF-8">
  <title>New Project</title>
</head>

<body>
  <header>
    <h1>שייקר - שיתופי פעולה בין סטודנטים</h1>
  </header>

  <main id="wrapper">
    <form name="myform" autocomplete="on">
      <h1>!יש לי רעיון אדיר לפרוייקט חדש</h1>
      <div class="form-group">
        <input type="text" id="projname" required name="projName" class="form-control" placeholder="שם הרעיון שלי">
      </div>
      <div class="form-group">
        <input type="text" id="projPic" name="picture" class="form-control" placeholder="קישור לתמונה של הפרוייקט">
      </div>
      <h5>?מאיזו מחלקה אתה חושב שאתה צריך עזרה</h5>
      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="תוכנה">
          <label class="form-check-label">תוכנה</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="חשמל">
          <label class="form-check-label">חשמל</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="פלסטיקה">
          <label class="form-check-label">פלסטיקה</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="תעשייה וניהול">
          <label class="form-check-label">תעשייה וניהול</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="כימית">
          <label class="form-check-label">כימית</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="עיצוב פנים">
          <label class="form-check-label">פנים</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="תכשיטים">
          <label class="form-check-label">תכשיטים</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="אופנה">
          <label class="form-check-label">אופנה</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="טקסטיל">
          <label class="form-check-label">טקסטיל</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" value="גרפי">
          <label class="form-check-label">גרפי</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="collabDep" name="collab[]" alue="אומנות">
          <label class="form-check-label">אומנות</label>
        </div>
      </div>
      <h5>: מידע נוסף שאתה חושב שצריך להוסיף</h5>
      <div class="form-group">
        <input type="text" id="proDesc" name="description" value="" class="form-control">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" required name="agree">
        <label class="form-check-label">אין בעיה, מאשר/ת את התנאים</label>
      </div>
    </form>
    <aside><a href="frontPage.php">
        <img src="./images/Shaker_logo.png" alt="mypic">
      </a>
    </aside>
    <button id="submitBtn" class="btn loc">Submit</button>

  </main>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.js"></script>
<script src="./insertDB.js"></script>

</html>