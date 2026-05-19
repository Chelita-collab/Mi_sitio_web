<?php
$num = $_POST['num'];
echo "<center>";
if ($num % 2 == 0) {
    echo "<h2>El número " . $num . " es: ¡PAR!</h2>";
} else {
    echo "<h2>El número " . $num . " es: ¡IMPAR!</h2>";
}
echo "<br><br>";
echo "<a href='form9.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>