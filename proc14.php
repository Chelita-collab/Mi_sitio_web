<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$metros = $_POST['metros'];
$centimetros = $metros * 100;
echo "<center>";
echo "<h1>Conversión de Medidas</h1>";
echo "<h2>Cantidad ingresada: " . $metros . " metros (m)</h2>";
echo "<h2>Equivale a: " . $centimetros . " centímetros (cm)</h2>><br><br>";
echo "<a href='form14.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
