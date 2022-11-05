<?php
require 'Pdo_methods.php';
global $output;

class fileUpload extends PdoMethods {


    public function checkFile() {

        if(isset($_POST['upload'])) {

            if($_FILES["file"]["type"] != "application/pdf") {
                $output = "File must be a pdf";
            }else if($_FILES["file"]["size"] > 100000) {
                $output = "File is too big";
            }else {
                return $this->addFile();
            }
        }
    }

    public function addFile() {
        
        $pdo = new PdoMethods();

        $sql = "INSERT INTO files (fileName, filePath) VALUES (:fileID, :filePath)";
        $filePath = "files/{$_FILES['file']['name']}";

        $bindings = [
            [':fileID',$_POST['fileName'],'str'],
            [':filePath',$filePath,'str']
        ];

        $result = $pdo->otherBinded($sql, $bindings);

        if($result == 'error') {
            $output= "There was an error adding the file name";
        }else {
            $output= "File has been added";
        }

    }
}
?>