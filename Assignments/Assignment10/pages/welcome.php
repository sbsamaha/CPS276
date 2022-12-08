<?php
function init() {
    require_once('classes/Pdo_methods.php');

    $pdo = new PdoMethods();
    $sql = "SELECT name, status FROM admin";
    $result = $pdo->selectNotBinded($sql);

    if($result == "error"){
        return getForm("<p>There was an error logging in</p>", $elementsArr);
      }
      else {
        if(count($result) != 0) {
            $name = $result[0]['name'];
        }
      }

    return ["<h1>Welcome</h1>","<p>Welcome $name</p>"];
}
?>