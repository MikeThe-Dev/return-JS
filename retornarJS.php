<?php

// Script em PHP para Retornar HTML, CSS e Javascript
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com HTML, CSS e JS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f4f4f4;
        }
        #container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1 id="mensagem">Bem-vindo ao PHP dinâmico!</h1>
        <button onclick="alterarMensagem()">Clique aqui</button>
    </div>
    <script>
        function alterarMensagem() {
            document.getElementById('mensagem').innerText = 'Você clicou no Botão! (Texto alterado com JavaScript!)';
        }
    </script>
</body>
</html>
