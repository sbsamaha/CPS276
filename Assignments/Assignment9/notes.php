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
    <title>Display Notes</title>
</head>
<body>
    <div class="container">
        <h1>Display Notes</h1>

        <p><a href = "index.php">Add Note</a></p>

        <form method="POST" action="notes.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="begDate">Beginning Date</label>
                <input type="date" class="form-control" id="begDate" name="begDate">
            </div>

            <div class="form-group">
                <label for="endDate">Ending Date</label>
                <input type="date" class="form-control" id="endDate" name="endDate">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="getNote" value="Get Notes">
            </div>

            <div class="form-group">
                <!-- Where note table output will go -->
                <?php echo $notes; ?>
            </div>
        </form>
    </div>
</body>
</html>