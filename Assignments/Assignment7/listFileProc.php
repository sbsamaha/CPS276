<?php
require_once "classes/Pdo_methods.php";
$output = getFiles();

function getFiles() {
    $pdo = new PdoMethods();

    $sql = "SELECT * FROM files";

    $records = $pdo->selectNotBinded($sql);

    if($records =='error') {
        return 'There has been an error processing your request';
    }else {
        if(count($records) != 0) {
            return(makeList($records));
        }else {
            return 'No files found';
        }
    }
}

function makeList($records) {
    $list ='<ul>';
    foreach ($records as $row) {
        $list .= "<li><a target='_blank' href={$row['file_path']}>{$row['file_name']}</li>";
    }
    $list.='</ul>';
    return $list;
}

?>