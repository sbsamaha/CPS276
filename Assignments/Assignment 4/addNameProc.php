<?php
class AddNamesProc{

    public function addClearNames() {
        if(isset($_POST['addNamesButton'])) {

            if(isset($_POST['names'])) {
                $nameArray = explode(" ", $_POST['names']);
            }

            $name = $nameArray[1]." , ".$nameArray[0];

            sort($nameArray);

            $name = implode(", ", $nameArray);

        }else if(isset($_POST['clearNamesButton'])) {
               
        }
        
        return $name;

    }

    

}
?>