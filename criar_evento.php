

<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "eventos";

    $connection = new mysqli($server, $username, $password, $database);

    if ($connection->connect_error) {

    die("Erro de conexão" . $connection->connect_error);
}


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexão com o banco de dados
        $titulo_evento = $_POST['titulo_evento'];
        $descricao_evento = $_POST['descricao_evento'];
        $data_evento = $_POST['data_evento'];
        $horario_inicio_evento = $_POST['horario_inicio_evento'];
        $horario_fim_evento = $_POST['horario_fim_evento'];
        $local_evento = $_POST['local_evento'];
        $categoria_evento = $_POST['categoria_evento'];
        $imagem_evento = $_POST['imagem_evento'];

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Titulo</th>";
        echo "<th>Descrição</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . htmlspecialchars($titulo) . "</td>"; // Usar htmlspecialchars para segurança
        echo "<td>" . htmlspecialchars($descricao) . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }

?>