<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 1.8) + 32;
echo "<center>";
echo "<h1>Resultado de la Conversión</h1>";
echo "<h2>Temperatura ingresada: " . $celsius . " °C</h2>";
echo "<h2>Equivale a: " . round($fahrenheit, 2) . " °F</h2><br><br>";
echo "<a href='form15.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>