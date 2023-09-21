<?php
require_once("./dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST["subjectID"])) {
    $id = $_POST["subjectID"];
    $query = 'SELECT * FROM cs_subject WHERE yearnumber = ' . $id . ' ORDER BY yearnumber ASC';
    $results = $db_handle->runQuery($query);
    print_r($results);
    foreach ($results as $state) {
        echo "<option value = '{$state['id']}'>{$state['yearnumber']}</option>";
    };
}