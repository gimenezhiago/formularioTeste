<?php
    include_once('config.php');

    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data = $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $nome = mysqli_real_escape_string($conexao, $nome);
        $email = mysqli_real_escape_string($conexao, $email);
        $telefone = mysqli_real_escape_string($conexao, $telefone);
        $sexo = mysqli_real_escape_string($conexao, $sexo);
        $data = mysqli_real_escape_string($conexao, $data);
        $cidade = mysqli_real_escape_string($conexao, $cidade);
        $estado = mysqli_real_escape_string($conexao, $estado);
        $endereco = mysqli_real_escape_string($conexao, $endereco);

        $resul = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, sexo, dataNascimento, cidade, estado, endereco) 
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data', '$cidade', '$estado', '$endereco')");

        /*if ($resul) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($conexao);
        }*/
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Formulario de Clientes</h1>
            <form action="formulario.php" method="post">
                <p>
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome">
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </p>
                <p>
                    <label for="telefone">Telefone: </label>
                    <input type="text" name="telefone">
                </p>
                <p>
                    <label for="sexo">Sexo: </label>
                    <input type="radio" value="mulher" name="genero">Mulher
                    <input type="radio" value="homem" name="genero">Homem
                    <input type="radio" value="outro" name="genero">Outro
                </p>
                <p>
                    <label for="data">Data de Nascimento: </label>
                    <input type="date" name="data">
                </p>
                <p>
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade">
                </p>
                <p>
                    <label for="estado">Estado: </label>
                    <input type="text" name="estado">
                </p>
                <p>
                    <label for="endereco">Endereço: </label>
                    <input type="text" name="endereco">
                </p>
                <button  name="submit" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>