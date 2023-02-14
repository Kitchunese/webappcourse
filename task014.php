<?php
    $arr = ['Коля' => '200', 'Вася'=> '300', 'Петя'=> '400'];
    foreach($arr as $array){
        echo key($arr) . " - зарплата ". current($arr). " долларов";
        echo "<br>";
       // echo  $arr[1]" зарплата " . next($arr). " долларов";
        echo  "Вася  - зарплата " . next($arr). " долларов";
        echo "<br>";
        echo array_key_last($arr) . " - зарплата " . next($arr). " долларов";
        return;
        
    }