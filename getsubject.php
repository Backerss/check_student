<?php
include "include/db_connect_oo.php";
if (!empty($_POST["subjectID"])) {
    $id = $_POST["subjectID"];
    $query = 'SELECT css.id,css.sj_name,css.sj_code,css.sj_studentroom
                FROM cs_subject css
                LEFT JOIN cs_yearnumber csy ON css.year_id = csy.id
                WHERE year_id = ' . $id . ' ORDER BY yearnumber ASC';
    $results = get_data($conn,$query);
    print_r($results);
    foreach ($results as $state) {
        echo "<option value = '{$state['id']}'>{$state['sj_code']} {$state['sj_name']} {$state['sj_studentroom']}</option>";
    };
}