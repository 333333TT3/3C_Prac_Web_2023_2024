<?php
$a = 3.0;
$b = 4.0;
$c = 5.0;

if ($a * $a + $b * $b == $c * $c) {
    echo "Trójkąt jest prostokątny.\n";
} elseif ($a == $b && $b == $c) {
    echo "Trójkąt jest równoboczny.\n";
} elseif ($a == $b || $b == $c || $a == $c) {
    echo "Trójkąt jest równoramienny.\n";
} else {
    echo "Trójkąt jest różnoboczny.\n";
}
?>
