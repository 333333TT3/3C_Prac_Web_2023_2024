<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Podzielnych przez 5</title>
</head>
<body>
<?php
$liczba = 100;
for ($i = 1; $i <= 5; $i++) {
    echo "Liczba $i: $liczba <br>";
    $liczba += 5;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Podzielnych przez 5</title>
</head>
<body>
<?php
$liczba = 100;
$i = 1;
while ($i <= 5) {
    echo "Liczba $i: $liczba <br>";
    $liczba += 5;
    $i++;
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wyświetlanie Liczb Podzielnych przez 5</title>
</head>
<body>
<?php
$liczba = 100;
$i = 1;
do {
    echo "Liczba $i: $liczba <br>";
    $liczba += 5;
    $i++;
} while ($i <= 5);
?>
</body>
</html>