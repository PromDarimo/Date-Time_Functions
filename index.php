<?php
    $date = date_create("2023-8-22");
    echo date_format($date, "d-m-y"); //22-08-23

    echo "<br>";

    $date_time = date_create("2023-8-22 11:11");
    echo date_format($date_time, "y-m-d h-i-s"); //hour-minute-second

    echo "<br>";

    $real_time = date_create("2099-8-22", timezone_open("Asia/Chongqing") );
    echo date_format($real_time, "y-m-d h-i-s" );

    echo "<br>";

    $result = date_diff($date_time, $real_time); 
    echo $result->y . "years";

    var_dump(checkdate(12, 31, 2000));
    var_dump(checkdate(2, 29, 2001)); //return false cuz feb on 2001 only 28 day
?>

<!--
    date_create()   //create date
    date_format()   //format date
    date_diff()     //compare past to present ...etc
        after that need to poiny "-> y or m or d"

    --------------------------------
    var_dump()      //count string
    checkdate()     //check date is it true or not (return true is valid, false is not valid) 
-->