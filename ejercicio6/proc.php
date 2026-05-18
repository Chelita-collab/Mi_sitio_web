<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "<center>";
echo "Su nombre es: " . $nombre . "<br>";
echo "Su edad es: " . $edad . "<br>";
echo "<br><br>";
echo "<a href='./form.html'>Volver al formulario</a>";
echo "<br><br>";
echo "<a href='../index.php'>Volver al Menú</a>";
echo "</center>";
?>