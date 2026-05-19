<?php
$numero = $_POST['numero'];
echo "<center>";
echo "<h1>Tabla del " . $numero . "</h1>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<h2>" . $numero . " x " . $i . " = " . $resultado . "</h2>";
}
echo "<br><br>";
echo "<a href='form19.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>