<?php
session_start();
if (isset($_SESSION['foto_perfil'])) {
    echo '<img src="'. $_SESSION['foto_perfil'] .'" alt="Foto de perfil" width="150">';
} else {
    echo 'Usuário não tem foto.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="foto">Escolha sua foto de perfil:</label>
    <input type="file" name="foto" id="foto" accept="image/*" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>