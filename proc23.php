<?php
$precio = $_POST['precio'];
$total_iva = $precio * 1.13;
echo "<center>";
echo "<h1>Cálculo de Impuesto</h1>";
echo "<h2>Precio: $" . number_format($precio, 2) . "</h2>";
echo "<h2>Total (con 13% IVA): $" . number_format($total_iva, 2) . "</h2><br><br>";
echo "<a href='form23.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>