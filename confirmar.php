<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['ID_USER'])) {
    die("Usuário não logado!");
}

$id_usuario = $_SESSION['ID_USER'];
$id_evento = $_POST['id_evento'];

 
$check = $connection->prepare("SELECT * FROM clientes_eventos WHERE ID_USER = ? AND ID_EVENTO = ?");
$check->bind_param("ii", $id_usuario, $id_evento);
$check->execute();
$result = $check->get_result();

if ($result->num_rows == 0) {
    $stmt = $connection->prepare("INSERT INTO clientes_eventos (ID_USER, ID_EVENTO, CONFIRMADO) VALUES (?, ?, 1)");
    $stmt->bind_param("ii", $id_usuario, $id_evento);

    if ($stmt->execute()) {
        header("Location: ColabPortal copy.php");
        exit;
    } else {
        echo "Erro ao confirmar presença: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Presença já confirmada!";
    echo '<br><a href="ColabPortal copy.php">Voltar</a>';
}

$check->close();
$connection->close();
?>
