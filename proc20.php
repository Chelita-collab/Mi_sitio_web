<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$limite = $_POST['limite'];
$suma = 0;
for ($i = 1; $i <= $limite; $i++) {
    $suma += $i;
}
echo "<center>";
echo "<h1>Suma Consecutiva</h1>";
echo "<h2>Número límite ingresado: " . $limite . "</h2>";
echo "<h2>La suma total desde 1 hasta " . $limite . " es: " . $suma . "</h2><br><br>";
echo "<a href='form20.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
