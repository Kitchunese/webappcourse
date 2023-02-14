<?php
    $min = 1;
    if (0<=$min and $min<=59) {
        if (0 <= $min and $min <= 15)
        echo $min . " - Первая четверть часа";
        if (15 < $min and $min<= 30)
        echo $min . " - Вторая четверть часа";
        if (30 < $min and $min<= 45)
        echo $min . " - Третья четверть часа";
        if (45 < $min and $min <= 59)
        echo $min . " - Четвертая четверть часа";
    };