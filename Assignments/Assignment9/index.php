<?php
require_once 'classes/Date_time.php';
$dt = new Date_time();
$notes = $dt->checkSubmit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
    <title>Assignment 9</title>
</head>
<body>
    <div class="container">
        <h1>Add Note</h1>
        
        <p><a href = "notes.php">Display Notes</a></p>

        <div><?php echo $notes; ?></div>
        
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="dateTime">Date and Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>

            <div class="form-group">
                <label for="note">Note</label>
                <textarea style="height: 500px;" class="form-control" id="note" name="note"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="addNote" value="Add Note">
            </div>
        </form>
    </div>
</body>
</html>