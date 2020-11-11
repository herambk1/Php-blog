<?php
    require('connect.php');

    function dd($value) // only for testing purpose 
    {
        echo "<pre>", print_r($value, true), "</pre>";
    }

    function selectAll($table)
    {
        global $conn;
        $sql = "SELECT * FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); 
        return $records;

    }

    $users = selectAll('users');
    dd($users);
   