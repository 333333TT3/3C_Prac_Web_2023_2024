<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["imie"]) || empty($_POST["nazwisko"]) || empty($_POST["wiek"]) || empty($_POST["klasa"]) || empty($_POST["email"]) || empty($_POST["adres"])) {
        echo "Wypełnij wszystkie pola formularza!";
    } else {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $wiek = $_POST["wiek"];
        $klasa = $_POST["klasa"];
        $email = $_POST["email"];

        echo "Rejestracja zakończona sukcesem! Dane ucznia:<br>";
        echo "Imię: $imie<br>";
        echo "Nazwisko: $nazwisko<br>";
        echo "Wiek: $wiek<br>";
        echo "Klasa: $klasa<br>";
        echo "Email: $email<br>";
        echo "Adres: $adres<br>";
    }
}
?>
