<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> <!-- Fuente Poppins -->
</head>
<body>

<div class="container">
    <!-- Formulario para insertar productos -->
    <div class="formulario">
        <form id="productForm" method="POST" action="insertar.php">
            <label for="idProd">ID del Producto:</label>
            <input type="number" id="idProd" name="idProd" placeholder="ID del producto" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" required>

            <label for="cantidad">Existencia:</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="Existencia" required>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" placeholder="Precio" required>

            <button type="submit">Registrar</button>
        </form>
    </div>

    <!-- Tabla que muestra los productos con opción de eliminar -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Ext.</th>
            <th>Acciones</th>
        </tr>
        <?php
        include 'conexion.php';
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                         <td>" . $row["idProd"] . "</td>
                         <td>" . htmlspecialchars($row["nombre"]) . "</td>
                         <td>$" . number_format($row["precio"], 2) . "</td>
                         <td>" . $row["cantidad"] . "</td>
                         <td>
                             <form method='POST' action='eliminar.php'>
                                 <input type='hidden' name='idProd' value='" . $row["idProd"] . "'>
                                 <button type='submit' class='eliminar'>Eliminar</button>
                             </form>
                         </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay productos</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
