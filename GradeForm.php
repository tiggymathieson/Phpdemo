<?php
    $total=$_POST["num1"] + $_POST["num2"] + $_POST["num3"] + $_POST["num4"];
    echo("Your Total is: " .  (string)$total);
    $grade = " ";

    if ($total >= 4 && $total < 13){
        $grade = "G";
    } elseif ($total >= 13 && $total < 22){
        $grade = "F";
    } elseif ($total >= 22 && $total < 31){
        $grade = "E";
    } elseif ($total >= 31 && $total < 41){
        $grade = "D";
    } elseif ($total >= 41 && $total < 54){
        $grade = "C";
    } elseif ($total >= 54 && $total < 67){
        $grade = "B";
    } elseif ($total >= 67 && $total < 80){
        $grade = "A";
    } elseif ($total >= 80 && $total < 100){
        $grade = "A*";
    } else {
        $grade = "U";
    }
    echo("<br>" . "Your grade is: " . (string)$grade);
    ?>