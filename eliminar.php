<?php
include 'conexion.php';
if(isset($_POST['idProd'])){
   $idProd = $_POST['idProd'];

   $sql = "DELETE FROM productos WHERE idProd='$idProd'";
   $conn->query($sql);
}
header("Location: ventas.php");
exit();
?>
