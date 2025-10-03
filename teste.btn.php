<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ConfirmarPresença {
            display: flex;
            background-color: #D90368;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            align-items: center;
            cursor: pointer;
            justify-content: center;
        }


        .clicado {
            background-color: #77A0A9;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <button class="btnin" id="btn" onclick="mudarCor(this)">Confirmar</button>
    <button type="submit" class="ConfirmarPresença" onclick="mudarCor(this)" id="btn">Confirmar Presença</button>

    <script>
        function mudarCor(botao) {
            botao.classList.toggle("clicado");
            if (botao.classList.contains("clicado")) {
                botao.textContent = "Confirmado";
            } else {
                botao.textContent = "Confirmar";
            }
        }
    </script>
</body>

</html>