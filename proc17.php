<?php
echo "<link rel='stylesheet' href='hoja_de_estilo.css'>";
$monto = $_POST['monto'];
$descuento = 0;
if ($monto > 50) {
    $descuento = $monto * 0.10;
}
$total = $monto - $descuento;
echo "<center>";
echo "<h1>Resumen de Compra</h1>";
echo "<h2>Monto inicial: $" . number_format($monto, 2) . "</h2>";
echo "<h2>Descuento aplicado: $" . number_format($descuento, 2) . "</h2>";
echo "<h2>Total Neto a Pagar: $" . number_format($total, 2) . "</h2><br><br>";
echo "<a href='form17.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>
