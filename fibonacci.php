<?php
//codenorte.com
$a = 1;
$b = 1;
$s = 1;
$tam = 10000;

echo "Serie de Fibonacci:";

while ($s < $tam) {
    echo $s . '<br>';
    $s = $a + $b;
    $a = $b;
    $b = $s;
}
?>

