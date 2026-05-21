<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
echo "<center>";
if ($n1 < $n2) {
    echo "<h2>El número menor es: " . $n1 . "</h2>";
} elseif ($n2 < $n1) {
    echo "<h2>El número menor es: " . $n2 . "</h2>";
} else {
    echo "<h2>Ambos números son iguales.</h2>";
}
echo "<br><br>";
echo "<a href='form8.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
