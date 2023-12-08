<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb i Ich Pierwiastków</title>
</head>
<body>
<?php
for ($i = 1; $i <= 10; $i++) {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek kwadratowy: $pierwiastek <br>";
}
?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb i Ich Pierwiastków</title>
</head>
<body>
<?php
$i = 1;
while ($i <= 10) {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek kwadratowy: $pierwiastek <br>";
    $i++;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb i Ich Pierwiastków</title>
</head>
<body>
<?php
$i = 1;
do {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek kwadratowy: $pierwiastek <br>";
    $i++;
} while ($i <= 10);
?>
</body>
</html>