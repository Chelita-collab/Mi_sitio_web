<?php
$num = $_POST['num'];
echo "<center>";
if ($num % 2 == 0) {
    echo "El número " . $num . " es: ¡PAR!";
} else {
    echo "El número " . $num . " es: ¡IMPAR!";
}
echo "<br><br>";
echo "<a href='./form.html'>Volver al formulario</a>";
echo "<br><br>";
echo "<a href='../index.php'>Volver al Menú</a>";
echo "</center>";
?>