<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hey_event";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Erro de conexão: " . $connection->connect_error);
}

if (isset($_GET['id_evento'])) {
    $id_evento = intval($_GET['id_evento']);

    $sql = "DELETE FROM tabela_de_eventos WHERE id_evento = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id_evento);

    if ($stmt->execute()) {
        header("Location: administrador.php?msg=evento_deletado");
        exit;
    } else {
        echo "Erro ao deletar evento: " . $connection->error;
    }

    $stmt->close();
}

$connection->close();
?>
