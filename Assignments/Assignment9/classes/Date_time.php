<?php
require_once 'Pdo_methods.php';

class Date_time extends PdoMethods {

    public function checkSubmit() {
        if(isset($_POST['addNote'])) {
            return $this->addNote();
        }else if(isset($_POST['getNote'])) {
            return $this->displayNote();
        }else {
            return "";
        }
    }

    private function addNote() {
        $pdo = new PdoMethods();

        $sql = "INSERT INTO notes (date_time, note) VALUES (:timeStamp, :note)";

        $timestamp = strtotime($_POST['dateTime']);

        $bindings = [
            [':timeStamp', $timestamp, 'int'],
            [':note', $_POST['note'], 'str']
        ];

        $records = $pdo->otherBinded($sql, $bindings);

        if($records === 'error') {
            return 'There was an error';
        }else {
            return 'Note added';
        }
    }

    private function displayNote() {
        $pdo = new PdoMethods();

        $begDate = strtotime($_POST['begDate']);

        $endDate = strtotime($_POST['endDate']);

        $sql = "SELECT date_time, note FROM notes WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";

        $bindings = [
            [':begDate', $begDate, 'int'],
            [':endDate', $endDate, 'int']
        ];

        $records = $pdo->selectBinded($sql, $bindings);

        if($records === 'error') {
            return "There was an error";
        }else {
            if(count($records) == 0) {
                return "No notes found for the selected date range";
            }else {
                $table = '<table class="table table-striped table-bordered"><thead><th>Date and Time</th><th>Note</th></td></thead><tbody>';

                foreach($records as $row) {
                    $date = date("n/d/Y h:i a", $row['date_time']);
                    $table .= "<tr><td>{$date}</td><td>{$row['note']}</td></tr>";
                }

                $table .= "</tbody></table>";

                return $table;
            }
        }
    }
}
?>