<?php

$number1 = readline("Enter the first number: ");

$number2 = readline("Enter the second number: ");

$number3 = readline("Enter the third number: ");

$smallest = $number1;


if ($number2 < $smallest) {

    $smallest = $number2;

}

if ($number3 < $smallest) {

    $smallest = $number3;

}
echo "The smallest number is: " . $smallest;
?>