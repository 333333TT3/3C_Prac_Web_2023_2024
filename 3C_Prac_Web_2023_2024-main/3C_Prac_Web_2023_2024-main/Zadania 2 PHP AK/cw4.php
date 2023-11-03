<?php
$rok = 2024;

if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
    echo "Rok $rok jest przestępny.\n";
} else {
    echo "Rok $rok nie jest przestępny.\n";
}

$wiek = floor($rok / 100) + 1;
echo "Rok $rok należy do $wiek wieku.\n";
?>
