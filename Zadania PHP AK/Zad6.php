<?php
$userYear = readline("Enter a year: ");


if (($userYear % 4 == 0 && $userYear % 100 != 0) || ($userYear % 400 == 0)) {

    $daysInFebruary = 29;

} else {

    $daysInFebruary = 28;

}

echo "In " . $userYear . ", February has " . $daysInFebruary . " days.";
?>