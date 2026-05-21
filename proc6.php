<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "<center>";
echo "<h1>Datos del Usuario</h1><br>";
echo "<h2>Su nombre es: " . $nombre . "</h2>";
echo "<h2>Su edad es: " . $edad . "</h2><br><br>";
echo "<a href='form6.html'>Volver al formulario</a><br><br>";
echo "<a href='index.php'>Volver al Menú</a>";
echo "</center>";
?>
