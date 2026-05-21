<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = $base * $altura;
echo "<center>";
echo "<h1>Cálculo del Área</h1>";
echo "<h2>El área del rectángulo es: " . $area . "</h2><br><br>";
echo "<a href='form12.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
