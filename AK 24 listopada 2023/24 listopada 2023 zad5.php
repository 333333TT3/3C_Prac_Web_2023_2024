<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Wyznaczanie Miejsca Zerowego Funkcji</title>
</head>
<body>
<?php
function funkcjaPowielania($x) {
    return $x * $x - 4; 
}

function miejsceZerowe($funkcja, $poczatek, $koniec, $dokladnosc) {
    $a = $poczatek;
    $b = $koniec;

    while (($b - $a) >= $dokladnosc) {
        $c = ($a + $b) / 2;

        if ($funkcja($c) == 0.0) {
            break;
        }

        if ($funkcja($c) * $funkcja($a) < 0) {
            $b = $c;
        } else {
            $a = $c;
        }
    }

    return $c;
}

$poczatekPrzedzialu = -2;
$koniecPrzedzialu = 2;
$dokladnosc = 0.0001;

$miejsceZerowe = miejsceZerowe('funkcjaPowielania', $poczatekPrzedzialu, $koniecPrzedzialu, $dokladnosc);

echo "Miejsce zerowe funkcji: $miejsceZerowe";
?>
</body>
</html>

test odpoowiedzi
1d
2d
3b
4d
5b