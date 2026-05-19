<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$multipicacion = $numero1 * $numero2;
echo "<center>";
echo "<h2>La multipicacion es: " . $multipicacion . "</h2><br><br>";
echo "<a href='form4.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>