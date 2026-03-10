<?php
// Recollim les dades enviades
$operacio = $_POST['op'];      // Tipus d'operació: s, r, m, d
$primerNumero = $_POST['n1'];  // Primer valor numèric
$segonNumero = $_POST['n2'];   // Segon valor numèric

// Funció per realitzar càlculs matemàtics bàsics
function calcular($operacio, $primerNumero, $segonNumero) {
    // Utilitzem un switch per decidir quina operació fer segons el valor de $operacio
    switch ($operacio) {
        case "s": // Cas de Suma
            return $primerNumero + $segonNumero;
        case "r": // Cas de Resta
            return $primerNumero - $segonNumero;
        case "m": // Cas de Multiplicació
            return $primerNumero * $segonNumero;
        case "d": // Cas de Divisió
            // Validació important: comprovem si el divisor és zero per evitar errors matemàtics
            if ($segonNumero == 0) {
                return "Error: divisió per zero";
            }
            return $primerNumero / $segonNumero;
        default: // control d'operació desconeguda i missatges d'error
            return "Error: operació desconeguda";
    }
}
// Cridem a la funció passant-li les dades rebudes i guardem el resultat
$respuesta = calcular($operacio, $primerNumero, $segonNumero);
// Mostrem el resultat final per pantalla
echo $respuesta;
?>
