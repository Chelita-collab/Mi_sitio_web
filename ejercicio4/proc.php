<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$multipicacion = $numero1 * $numero2;
echo "<center>";
echo "La multipicacion es: " . $multipicacion;
echo "<br><br>";
echo "<a href='./form.html'>Volver al formulario</a>";
echo "<br><br>";
echo "<a href='../index.php'>Volver al Menú</a>";
echo "</center>";
?>