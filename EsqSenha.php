<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <script src="https://kit.fontawesome.com/715a89f136.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="Logo">
        <img src="assets/Logo HeyEvent Ofc.png" alt="" width="150px">
    </div>
    <p class="HE">HeyEvent</p>
    <form action="post">
              <div class="bvp">
         <p>Bem-Vindo ao nosso portal!</p>
      </div>
        <p class="p1">Um Token de acesso vai ser enviado para seu email</p>
        <input type="text" placeholder="Email">
        <button type="submit">Próximo</button>
    </form>

    <style>
        body {

            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: "Raleway", sans-serif;

            background-image: linear-gradient(to bottom, #000F55, #6C0034);
            background-repeat: no-repeat;

        }

        button {
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: none;
            margin-top: 150px;
            background-color: #000F55;
            color: white;
        }

        form {
            border-radius: 5px;
            width: 450px;
            height: 350px;
            margin-left: 750px;
            text-align: center;
            background-color: white;
            box-shadow: 5px 5px 10px 5px rgba(0, 0, 0, 0.108);

        }

        .HE {
            color: white;
            font-family: "Quicksand", sans-serif;
            font-size: 70px;
            text-align: center;
            margin-top: -10px;

        }

        .Logo {
            text-align: center;
        }

        input {
            height: 40px;
            width: 300px;
            border-radius: 8px;
            border-style: solid;
            border-color: black;
            border-width: 1px;
        }
    </style>
</body>

</html>