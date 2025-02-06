<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotel_booking_website';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if(!$con) {
        die("Cannot Connect to Database" .mysqli_connect_error());
    }

    function filteration($data) {
        foreach ($data as $key => $value) {
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            $value = strip_tags($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function select($sql, $values, $datatypes) {
        global $con; 

        if (!$con) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if (mysqli_stmt_execute($stmt)) {
                return mysqli_stmt_get_result($stmt);
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Select");
            }
        } else {
            die("Query cannot be prepared - Select");
        }
    }

?>