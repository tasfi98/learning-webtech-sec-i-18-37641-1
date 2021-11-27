<?php
    $num1=65;
    $num2=50;
    $num3=30;
    if ($num1>$num2 && $num1>$num3) {
    	echo "Number 1 = " . $num1 . " is greater than Number 2 = " . $num2 . " and Number 3 = " . $num3;
    }
    elseif ($num2>$num1 && $num2>$num3) {
    	echo "Number 2 = " . $num2 . " is greater than Number 1 = " . $num1 . " and Number 3 = " . $num3;
    }
    elseif ($num3>$num1 && $num3>$num2) {
    	echo "Number 3 = " . $num3 . " is greater than Number 1 = " . $num1 . " and Number 2 = " . $num2;
    }
    else{
    	echo "Two or three numbers are equal";
    }
?>