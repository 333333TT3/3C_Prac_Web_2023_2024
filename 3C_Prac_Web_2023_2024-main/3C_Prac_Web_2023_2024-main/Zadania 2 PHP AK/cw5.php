<?php
$procent = 75.0;

if ($procent >= 90.0) {
    $ocena = 'A';
} elseif ($procent >= 80.0) {
    $ocena = 'B';
} elseif ($procent >= 70.0) {
    $ocena = 'C';
} elseif ($procent >= 60.0) {
    $ocena = 'D';
} else {
    $ocena = 'F';
}

echo "Wynik procentowy: $procent%\n";
echo "Ocena: $ocena\n";
?>
