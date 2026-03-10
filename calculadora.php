<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];


if ($operacio == "s") {
    $repuesta = $primerNumero + $segonNumero;
} else if ($operacio == "r") {
    $repuesta = $primerNumero - $segonNumero;
} else if ($operacio == "m") {
    $repuesta = $primerNumero * $segonNumero;
} else if ($operacio == "d") {
    if ($segonNumero != 0) {
        $repuesta = $primerNumero / $segonNumero;
    } else {
        $repuesta = "Error";
    }
}

echo $repuesta;
?>
