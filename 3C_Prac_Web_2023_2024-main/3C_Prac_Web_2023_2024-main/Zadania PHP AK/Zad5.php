<?php

$userAge = readline("Enter your age: ");

if ($userAge < 11) {

    echo "You are still a child.";

} elseif ($userAge >= 11 && $userAge <= 17) {

    echo "You are a teenager.";

} else {

    echo "You are an adult.";

}
?>