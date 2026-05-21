<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$promedio = ($n1 + $n2 + $n3) / 3;
echo "<center>";
echo "<h1>Resultado</h1>";
echo "<h2>Nota 1: " . $n1 . "</h2>";
echo "<h2>Nota 2: " . $n2 . "</h2>";
echo "<h2>Nota 3: " . $n3 . "</h2>";
echo "<h2>El promedio final es: " . round($promedio, 2) . "</h2><br><br>";
echo "<a href='form10.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
