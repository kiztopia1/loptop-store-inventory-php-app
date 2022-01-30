<?php 
    function find_all_items() {
        global $db;
        $sql = "select * from item";
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>