<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Naturalnych</title>
</head>
<body>
<?php
$liczba = 100;
for ($i = 1; $i <= 10; $i++) {
    echo "Liczba $i: $liczba <br>";
    $liczba--;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Naturalnych</title>
</head>
<body>
<?php
$liczba = 100;
$i = 1;
while ($i <= 10) {
    echo "Liczba $i: $liczba <br>";
    $liczba--;
    $i++;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Naturalnych</title>
</head>
<body>
<?php
$liczba = 100;
$i = 1;
do {
    echo "Liczba $i: $liczba <br>";
    $liczba--;
    $i++;
} while ($i <= 10);
?>
</body>
</html>
