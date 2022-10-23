<?php
if(isset($_POST['submit'])) {
    require_once 'Directories.php';
    $directory = new Directories();
    $output = $directory->makeDir();
}else {
    $output = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
    <title>Assignment 5</title>
</head>
<body>
    <div id="wrapper" class="container">
        <h1>File and Directory Assignment</h1>
        <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>

    <form method="POST" action="index.php">

    <?php echo $output ?>
    <?php echo $msg ?>


    <div class="form-row">
          <div class="col">
            <label for="names">Folder Name</label>
            <input type="text" class="form-control" name= "folderName" id="folderName">
          </div>
    </div>

    <div class="form-row">
        <label for="namelist">Contents</label>
        <textarea style="height: 250px;" class="form-control"
        id="contents" name="folderContents"></textarea>
    </div>

    <div class="form-row">
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>

    </form>

    </div>
    
</body>
</html>