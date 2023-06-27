<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $turma = $_POST['turma'];
    gravarAluno($cpf, $nome, $endereco, $telefone, $turma);
}

function gravarAluno($cpf, $nome, $endereco, $telefone, $turma)
{
    $aluno = array(
        $cpf => array(
            'nome' => $nome,
            'endereco' => $endereco,
            'telefone' => $telefone,
            'turma' => $turma
        )
    );

    $aluno_json = json_encode($aluno);

    $nomeArquivo = 'alunos.txt';
    file_put_contents($nomeArquivo, $aluno_json, FILE_APPEND);

    echo "Dados do Aluno gravados com sucesso!";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f8f8f8;
            color: #333;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #e91e63;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        .input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #e91e63;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Salvar e Visualizar Alunos</h1>


    <form method="POST" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" class="imput" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" class="imput" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" class="imput" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" class="imput" required><br><br>

        <label for="telefone">Turma:</label><br>
        <input type="text" name="turma" id="turma" class="imput" required><br><br>

        <input type="submit" name="salvar" value="Salvar">
        <input type="reset" name="limpar" class="limpa" value="Limpar Formulario">
    </form>

    <br>
    <a href="alunos.txt" target="_blank">Visualizar o Arquivo</a>
</body>

</html>