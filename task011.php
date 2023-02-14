<?php
    $lang = "ru";
    if ($lang == "ru")
        $arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
    if ($lang == "en")
        $arr = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
    echo "первый способ:  " . $arr[0] .", ". $arr[1]  .", ".$arr[2]  .", ". $arr[3]  .", ". $arr[4]  .", ". $arr[5]  .", ". $arr[6] ;

    echo"<br>";
    switch($lang = "en"){

        case $lang = "ru" : 
            $arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
            echo "второй способ:  " . $arr[0] .", ". $arr[1]  .", ".$arr[2]  .", ". $arr[3]  .", ". $arr[4]  .", ". $arr[5]  .", ". $arr[6] ;
            break;

        case $lang = "en": 
            $arr = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
            echo "второй способ:  " . $arr[0] .", ". $arr[1]  .", ".$arr[2]  .", ". $arr[3]  .", ". $arr[4]  .", ". $arr[5]  .", ". $arr[6] ;
            break;
    }

    echo"<br>";
    $lang = ["ru" =>"понедельник" . ", " . "вторник" . ", " . "среда"  . ", " ."четверг"  . ", " ."пятница"  . ", " ."суббота" . ", " . "воскресенье",
    "en"=>"monday". ", " ."tuesday". ", " . "wednesday". ", " ."thursday". ", " ."friday". ", " ."saturday". ", " . "sunday"];
    echo "третий способ: " . $lang["ru"];
    