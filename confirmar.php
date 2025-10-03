<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['ID_USER'])) {
    echo json_encode(['status' => 'error', 'msg' => 'Usuário não logado']);
    exit;
}

$id_usuario = $_SESSION['ID_USER'];
$id_evento = $_POST['id_evento'] ?? null;

if (!$id_evento) {
    echo json_encode(['status' => 'error', 'msg' => 'Evento inválido']);
    exit;
}
$check = $connection->prepare("SELECT * FROM clientes_eventos WHERE ID_USER = ? AND ID_EVENTO = ?");
$check->bind_param("ii", $id_usuario, $id_evento);
$check->execute();
$result = $check->get_result();

if ($result->num_rows == 0) {
   
    $stmt = $connection->prepare("INSERT INTO clientes_eventos (ID_USER, ID_EVENTO, CONFIRMADO) VALUES (?, ?, 1)");
    $stmt->bind_param("ii", $id_usuario, $id_evento);
    $stmt->execute();
    $stmt->close();
} else {
    
    $stmt = $connection->prepare("UPDATE clientes_eventos SET CONFIRMADO = 1 WHERE ID_USER = ? AND ID_EVENTO = ?");
    $stmt->bind_param("ii", $id_usuario, $id_evento);
    $stmt->execute();
    $stmt->close();
}

$check->close();
$connection->close();

echo json_encode(['status' => 'ok', 'confirmado' => true]);
?>
