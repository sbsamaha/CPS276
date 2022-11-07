<?php
require_once "classes/Pdo_methods.php";

global $output;

function processFile() {

        if($_FILES["fileUpload"]["size"] > 100000) {
            $output = "File is too big";
        }else if($_FILES["fileUpload"]["type"] != "application/pdf") {
            $output = "File must be PDF";
        }else if (!move_upload_file($_FILES["fileUpload"]["tmp_name"], "files/" . $_FILES["fileUpload"]["fileName"])) {
            $output = "There was a problem";
        }else {
            $this->addFile();
            $output = "<p>File added</p>";
        }

        
    
}

function addFile() {
    $pdo = new PdoMethods();

    $sql = "INSERT INTO files (file_name, file_path) VALUES (:fileName, :filePath)";

    $bindings = [
        [':fileName', $_POST['fileName'], 'str'],
        [':filePath', "Assignment7/files/" . $_FILES["fileUpload"]["fileName"], 'str']
    ];

    $results = $pdo->otherBinded($sql, $bindings);

    if($results === 'error') {
        return "There was an error adding the file";
    }else {
        return "File has been added";
    }
}

?>