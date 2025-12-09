<?php

$x = 1;
$y = 2;
$n = 1.1;
$m = 2.2;


echo "x:" . $x . "<br>";

echo "y:" . $y . "<br>";

$suma = $x + $y;
echo "suma: " . $suma;
$resta = $x - $y;
echo " -- resta: " . $resta;
$producte = $x * $y;
echo " -- producte: " . $producte;
$divisio = $x / $y;
echo " -- divisió: " . $divisio;
$modul = $x % $y;
echo " -- modul: " . $modul;

echo "<hr>";
echo "n:" . $n . "<br>";

echo "m:" . $m . "<br>";

$suma = $n + $m;
echo "suma: " . $suma;
$resta = $n - $m;
echo " -- resta: " . $resta;
$producte = $n * $m;
echo " -- producte: " . $producte;
$divisio = $n / $m;
echo " -- divisió: " . $divisio;
$modul = $n % $m;
echo " -- modul: " . $modul;


echo "<hr>";
$doblex = $x * 2;
echo "doble x: " . $doblex;
$dobley = $y * 2;
echo " -- doble y: " . $dobley;
$doblen = $n * 2;
echo " -- doble n: " . $doblen;
$doblem = $m * 2;
echo " -- doble m: " . $doblem;
echo "<br>";
$suma = $x + $y + $n + $m;
echo "suma: " . $suma;
$producte = $x * $y * $n * $m;
echo " -- producte: " . $producte;
?>
