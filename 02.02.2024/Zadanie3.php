<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_GET["imie"]) || empty($_GET["nazwisko"]) || empty($_GET["wiek"]) || empty($_GET["klasa"]) || empty($_GET["email"]) || empty($_GET["adres"])) {
        echo "Wypełnij wszystkie pola formularza!";
    } else {
        $imie = $_GET["imie"];
        $nazwisko = $_GET["nazwisko"];
        $wiek = $_GET["wiek"];
        $klasa = $_GET["klasa"];
        $email = $_GET["email"];
        $email = $_GET["adres"];

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