<?php
$kategoria = "elektronika";
$cena = 100.0;

switch ($kategoria) {
    case "elektronika":
        $podatek = 0.23;
        break;
    case "odzież":
        $podatek = 0.08;
        break;
    case "pieczywo":
        $podatek = 0.05;
        break;
    default:
        $podatek = 0.1;
        break;
}

$cenaBrutto = $cena * (1 + $podatek);
echo "Kategoria: $kategoria\n";
echo "Cena netto: $cena\n";
echo "Podatek: " . ($podatek * 100) . "%\n";
echo "Cena brutto: $cenaBrutto\n";
?>
