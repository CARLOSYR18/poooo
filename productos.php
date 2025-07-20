<head>
    <title>Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
include("conexion.php");
$resultado = $conn->query("SELECT * FROM Productos");
?>
<h2>Productos</h2>
<table border="1">
<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th></tr>
<?php while($row = $resultado->fetch_assoc()): ?>
<tr>
    <td><?= $row['id_producto'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['precio'] ?></td>
    <td><?= $row['stock'] ?></td>
</tr>
<?php endwhile; ?>
</table>
