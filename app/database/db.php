<?php
    require('connect.php');

    function dd($value) // only for testing purpose 
    {
        echo "<pre>", print_r($value, true), "</pre>";
    }

    function selectAll($table, $conditions =[])
    {
        if (empty($conditions)) 
        {
            global $conn;
            $sql = "SELECT * FROM $table";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); 
            return $records;       
        } 
        else 
        {
            $i = 0;
            foreach ($conditions as $key => $value) 
            {
                if ($i === 0) 
                {
                  $sql = $sql . " WHERE $key=$value";
                } 
                else 
                {
                    $sql = $sql . " AND $key=$value";
                }
                $i++;
            }
             dd($sql);
        }
    }

    $conditions =[
        'admin' => 1,
        'username' => 'raisoni'
    ];

    $users = selectAll('users', $conditions);
    dd($users);
   