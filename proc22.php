<?php
$dolares = $_POST['dolares'];
$tasa_cambio = 0.92;
$euros = $dolares * $tasa_cambio;
echo "<center>";
echo "<h1>Resultado del cambio de conversión a euros.</h1>";
echo "<h2>Cantidad ingresada: $" . number_format($dolares, 2) . " USD</h2>";
echo "<h2>Equivale a: €" . number_format($euros, 2) . " EUR</h2>";
echo "<h2>Tasa de cambio usada: 1 USD = " . $tasa_cambio . " EUR</h2><br><br>";
echo "<a href='form22.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>