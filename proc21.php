<?php
$palabra = $_POST['palabra'];
$cantidad = strlen($palabra);
echo "<center>";
echo "<h1>Análisis de las palabras</h1>";
echo "<h2>Palabra analizada: '" . $palabra . "'</h2>";
echo "<h2>Contiene: " . $cantidad . " letras.</h2><br><br>";
echo "<a href='form21.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>