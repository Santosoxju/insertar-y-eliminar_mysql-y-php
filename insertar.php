<?php 
include 'conexion.php';

if(isset($_POST['idProd']) && isset($_POST['nombre']) && isset($_POST['cantidad']) && isset($_POST['precio'])){
   $idProd = $_POST['idProd'];  // Recibir ID del producto
   $nombre = $_POST['nombre'];
   $cantidad = $_POST['cantidad'];
   $precio = $_POST['precio'];

   // Asegúrate de que la tabla permita insertar el idProd manualmente
   $sql = "INSERT INTO productos (idProd, nombre, cantidad, precio) VALUES ('$idProd', '$nombre', '$cantidad', '$precio')";
   if ($conn->query($sql) === TRUE) {
       echo "Producto insertado correctamente";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
header("Location:ventas.php");
?>
