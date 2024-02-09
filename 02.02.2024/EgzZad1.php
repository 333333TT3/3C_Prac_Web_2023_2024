<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["Name"]) || empty($_POST["Gender"]) || empty($_POST["Age"])) {
        echo "Wypełnij wszystkie pola formularza!";
    } else {
        $Name = $_POST["Name"];
        $Gender = $_POST["Gender"];
        $Age = $_POST["Age"];

        echo "Rejestracja zakończona sukcesem! Dane ucznia:<br>";
        echo "Name: $Name<br>";
        echo "Gender: $Gender<br>";
        echo "Age: $Age<br>";
    }
}
?>