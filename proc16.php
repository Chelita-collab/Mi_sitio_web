<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$salario = $horas * $pago;
echo "<center>";
echo "<h1>Datos de pago</h1>";
echo "<h2>Empleado: " . $nombre . "</h2>";
echo "<h2>Horas trabajadas: " . $horas . "</h2>";
echo "<h2>Pago por hora: $" . number_format($pago, 2) . "</h2>";
echo "<h2>Salario Total: $" . number_format($salario, 2) . "</h2><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>