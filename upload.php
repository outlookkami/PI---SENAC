<?php
session_start();


$targetDir = "uploads/";  
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}


if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
    $fileTmp = $_FILES['foto']['tmp_name'];
    $fileName = basename($_FILES['foto']['name']);

    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = uniqid('perfil_') . "." . $fileExt;
    
    $targetFile = $targetDir . $newFileName;

    if (move_uploaded_file($fileTmp, $targetFile)) {
        $_SESSION['foto_perfil'] = $targetFile;
        echo "Upload realizado com sucesso!";
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado ou erro no upload.";
}
?>
