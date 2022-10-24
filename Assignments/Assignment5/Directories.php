<?php

class Directories {

    function makeDir() {

        global $msg;

        if(isset($_POST['submit'])) {

            if(isset($_POST['folderName'])) {
                $folderName = $_POST['folderName'];
                
                $dirPath = "./directories/".$folderName."/";
               
                if(file_exists($dirPath)) {
                    $msg = "A directory with that name already exists";
                }else if (!file_exists($dirPath)) {

                    $userDir = mkdir($dirPath, 0777);
                    chmod($dirPath, 0777);

                    $file = fopen($dirPath."/readme.txt", "w");
    
                    if(isset($_POST['folderContents'])) {
                        $contents = $_POST['folderContents'];

                        fwrite($file,$contents);
                        fclose($file);
                    }

                    $msg ="<p><a href=".$dirPath.">Path where file is located </a></p>";

                }

            }

      
        }
    }

}
?>