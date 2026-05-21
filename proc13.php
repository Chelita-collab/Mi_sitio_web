<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$lado = $_POST['lado'];
$perimetro = $lado * 4;
echo "<center>";
echo "<h1>Cálculo del Perímetro</h1>";
echo "<h2>El perímetro del cuadrado es: " . $perimetro . "</h2><br><br>";
echo "<a href='form13.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
