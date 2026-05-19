<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;
echo "<center>";
echo "<h1>Factura Comercial</h1>";
echo "<h2>Cliente: " . $cliente . "</h2>";
echo "<h2>Producto: " . $producto . "</h2>";
echo "<h2>Cantidad: " . $cantidad . "</h2>";
echo "<h2>Precio Unitario: $" . number_format($precio, 2) . "</h2>";
echo "<h2>Subtotal: $" . number_format($subtotal, 2) . "</h2>";
echo "<h2>Total a Pagar: $" . number_format($subtotal, 2) . "</h2><br><br>";
echo "<a href='form18.html'>Volver al formulario</a><br><br>";
echo "<a href='index.html'>Volver al Menú</a>";
echo "</center>";
?>