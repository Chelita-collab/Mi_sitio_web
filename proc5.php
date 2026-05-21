<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$division = $numero1 / $numero2;
echo "<center>";
echo "<h2>La division es: " . $division . "</h2><br><br>";
echo "<a href='form5.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>