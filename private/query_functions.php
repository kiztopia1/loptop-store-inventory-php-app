<?php 
    function find_all_items() {
        global $db;
        $sql = "select * from item";
        $result = mysqli_query($db, $sql);
        return $result;
    }
    function find_item($id) {
        global $db;
        $sql = "select * from item ";
        $sql .= "where id=". $id;
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>