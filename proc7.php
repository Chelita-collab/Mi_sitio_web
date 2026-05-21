<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
echo "<center>";
if ($n1 > $n2) {
    echo "<h1>El número mayor es: " . $n1 . "</h1>";
} elseif ($n2 > $n1) {
    echo "<h1>El número mayor es: " . $n2 . "</h1>";
} else {
    echo "<h1>Ambos números son iguales.</h1>";
}
echo "<br><br>";
echo "<a href='form7.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
