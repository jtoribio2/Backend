
<?php
// Configuració de la connexió a la base de dades
$host = "localhost";
$database = "pr2_jtp";
$username = "root";
$password = "";

// Opcions de PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Creem la connexió amb MySQL
    $conexion = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        $options
    );

} catch (PDOException $e) {
    // Registrem l'error sense exposar detalls interns
    error_log("Error de connexió a la base de dades: " . $e->getMessage());

    // Mostrem un missatge genèric
    throw new RuntimeException(
        "No s'ha pogut connectar amb la base de dades.",
        0,
        $e
    );
}
