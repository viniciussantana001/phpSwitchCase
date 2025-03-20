<?php

$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$b5 = $_POST['b5'];

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];

$nome = $_POST['nome'];

$total = 0;

if ($b1 > 0) {
    for ($i = 0; $i < $b1; $i++) {
        $total += 10;
    }
}
if ($b2 > 0) {
    for ($i = 0; $i < $b2; $i++) {
        $total += 12;
    }
}
if ($b3 > 0) {
    for ($i = 0; $i < $b3; $i++) {
        $total += 14;
    }
}
if ($b4 > 0) {
    for ($i = 0; $i < $b4; $i++) {
        $total += 15;
    }
}
if ($b5 > 0) {
    for ($i = 0; $i < $b5; $i++) {
        $total += 18;
    }
}

if ($a1 > 0) {
    for ($i = 0; $i < $a1; $i++) {
        $total += 2;
    }
}
if ($a2 > 0) {
    for ($i = 0; $i < $a2; $i++) {
        $total += 3;
    }
}
if ($a3 > 0) {
    for ($i = 0; $i < $a3; $i++) {
        $total += 3;
    }
}
if ($a4 > 0) {
    for ($i = 0; $i < $a4; $i++) {
        $total += 4;
    }
}
if ($a5 > 0) {
    for ($i = 0; $i < $a5; $i++) {
        $total += 4;
    }
}

echo "Seu nome eh " . $nome . " e o valor total do pedido ficou em R$" . $total . ",00";

?>
