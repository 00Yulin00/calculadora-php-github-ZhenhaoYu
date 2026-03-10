<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

function calcular($operacio, $primerNumero, $segonNumero) {
    if ($operacio == "s") {
        return $primerNumero + $segonNumero;
    } else if ($operacio == "r") {
        return $primerNumero - $segonNumero;
    } else if ($operacio == "m") {
        return $primerNumero * $segonNumero;
    } else if ($operacio == "d") {
        if ($segonNumero != 0) {
            return $primerNumero / $segonNumero;
        } else {
            return "Error";
        }
    }
}

echo $repuesta;
?>
