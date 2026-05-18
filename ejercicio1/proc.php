<?php
echo "<center>";
$nombre = $_POST['nombre'];
echo "<h1>¡Bienvenido/a, " . $nombre . "!</h1>";
echo "<br><br>";
echo "<a href='./form.html'>Volver al formulario</a>";
echo "<br><br>";
echo "<a href='../index.php'>Volver al Menú</a>";
echo "</center>";
?>