<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
echo "<center>";
if ($n1 > $n2) {
    echo "El número mayor es: " . $n1 ;
} elseif ($n2 > $n1) {
    echo "El número mayor es: " . $n2 ;
} else {
    echo "Ambos números son iguales.";
    }
echo "<br><br>";
echo "<a href='./form.html'>Volver al formulario</a>";
echo "<br><br>";
echo "<a href='../index.php'>Volver al Menú</a>";
echo "</center>";
?>