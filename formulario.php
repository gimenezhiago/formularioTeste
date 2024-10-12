<?php

    if(isset($_POST['submit'])){
        /*print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de nascimento: ' . $_POST['data']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);*/
    }

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data = $_POST['data'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $resul = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, sexo, dataNascimento, cidade, estado, endereco) 
    VALUES ('$nome', '$email', '$telefone', '$sexo', '$data', '$cidade', '$estado', '$endereco')");

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