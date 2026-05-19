<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$suma = $numero1 + $numero2;
echo "<center>";
echo "<h1>La suma es: " . $suma . "</h1><br><br>";
echo "<a href='form2.html'>Volver al formulario</a><br><br>";
echo "<a href='index.php'>Volver al Menú</a>";
echo "</center>";
?>