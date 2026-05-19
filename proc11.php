<?php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$promedio = ($n1 + $n2 + $n3) / 3;
echo "<center>";
echo "<h1>Resultado</h1>";
echo "<h2>Promedio obtenido: " . round($promedio, 2) . "</h2>";
if ($promedio >= 6.0) {
    echo "<h2>¡Felicidades! usted ha aprobado</h2>";
} else {
    echo "<h2>Usted ha reprobado</h2>";
}
echo "<br><br>";
echo "<a href='form11.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>