<?php
$userNumber = readline("Enter a number: ");

if ($userNumber < 0) {

    echo $userNumber . " is less than zero.";

} elseif ($userNumber > 0) {

    echo $userNumber . " is more than zero.";

} else {

    echo $userNumber . " is equal to zero.";

}

?>