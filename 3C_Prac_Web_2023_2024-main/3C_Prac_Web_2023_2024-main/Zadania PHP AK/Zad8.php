<?php
$number1 = readline("Enter the first number: ");

$number2 = readline("Enter the second number: ");

$number3 = readline("Enter the third number: ");

if ($number1 == $number2 || $number1 == $number3 || $number2 == $number3) {

    echo "At least two of the three numbers are the same.";

} else {
    echo "None of the three numbers are the same.";
}
?>