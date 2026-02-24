<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];


if ($op == "s") {
    $res = $n1 + $n2;
} else if ($op == "r") {
    $res = $n1 - $n2;
} else if ($op == "m") {
    $res = $n1 * $n2;
} else if ($op == "d") {
    if ($n2 != 0) {
        $res = $n1 / $n2;
    } else {
        $res = "Error";
    }
}

echo $res;
?>
