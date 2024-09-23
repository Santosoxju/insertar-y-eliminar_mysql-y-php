$servername = "sql101.infinityfree.com"; // Host
$username = "if0_37364824";               // Usuario
$password = "tu_contraseña_de_vPanel";    // Contraseña de vPanel
$dbname = "if0_37364824_inventario";      // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
