<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];
echo "<center>";
echo "<h1>Información</h1>";
echo "<h2>Nombre: " . $nombre . "</h2>";
echo "<h2>Correo Electrónico: " . $correo . "</h2>";
echo "<h2>Ciudad: " . $ciudad . "</h2><br><br>";
echo "<a href='form25.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>