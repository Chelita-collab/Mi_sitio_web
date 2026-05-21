<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$edad_actual = $_POST['edad'];
$edad_futura = $edad_actual + 10;
echo "<center>";
echo "<h1>Dentro de 10 años</h1>";
echo "<h2>Tu edad actual es: " . $edad_actual . " años</h2>";
echo "<h2>Dentro de 10 años tendrás: " . $edad_futura . " años</h2><br><br>";
echo "<a href='form24.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
