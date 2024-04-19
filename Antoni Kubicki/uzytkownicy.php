<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <section class="left-banner">
        <h2>Nasze osiedle</h2>
    </section>


    <section class="right-banner">
        <script>
<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "portal"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}
echo "Połączono z bazą danych!";

$login = $_POST['login'];
$password = $_POST['password'];
$check_login_query = "SELECT * FROM users WHERE login = '$login'";
$login_result = mysqli_query($conn, $check_login_query);


if (mysqli_num_rows($login_result) === 0) {
    echo "Login nie istnieje.";
} else {
    $user_data = mysqli_fetch_assoc($login_result);
    $hashed_password = sha1($password);

    if ($hashed_password === $user_data['password']) {
        echo "<img src='osoba.jpg' alt='osoba'>";
        echo "<h4>{$user_data['login']} (wiek: " . (date('Y') - $user_data['rok_urodz']) . ")</h4>";
        echo "<p>hobby: {$user_data['hobby']}</p>";
        echo "<h1><img src='icon-on.png' alt='serce'> {$user_data['przyjaciele']}</h1>";
        echo "<a href='dane.html'>Więcej informacji</a>";
    } else {
        echo "Hasło nieprawidłowe.";
    }
}
?>
        </script>
    </section>

    <section class="left-block">
        <h3>Logowanie</h3>
        <form action="uzytkownicy.php" method="post">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
            <br>
            <label for="haslo">Hasło:</label>
            <input type="password" id="haslo" name="haslo" required>
            <br>
            <button type="submit">Zaloguj</button>
        </form>
    </section>


    <section class="right-block ">
        <h3>Wizytówka</h3>
        <img src = "o3.jpg">
        <script>
<?php
$query = "SELECT COUNT(*) AS user_count FROM users";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
echo "<h5>Liczba użytkowników portalu: " . $row['user_count'] . "</h5>";
?>
        </script>
    </section>
    <footer>
        Stronę wykonał: Antoni Kubicki
    </footer>
</body>
</html>