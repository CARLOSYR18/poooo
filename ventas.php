<head>
    <title>Ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
include("conexion.php");
$query = "
SELECT v.id_venta, v.fecha, c.nombre AS cliente, v.total
FROM Ventas v
JOIN Clientes c ON v.cliente_id = c.id_cliente
";
$resultado = $conn->query($query);
?>
<h2>Ventas</h2>
<table border="1">
<tr><th>ID</th><th>Fecha</th><th>Cliente</th><th>Total</th></tr>
<?php while($row = $resultado->fetch_assoc()): ?>
<tr>
    <td><?= $row['id_venta'] ?></td>
    <td><?= $row['fecha'] ?></td>
    <td><?= $row['cliente'] ?></td>
    <td><?= $row['total'] ?></td>
</tr>
<?php endwhile; ?>
</table>
