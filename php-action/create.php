<?php

//................CONEXÃO................

require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])):

    $nome_completo = mysqli_escape_string($connect, $_POST['nome_completo']);    
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $genero = mysqli_escape_string($connect, $_POST['genero']);     
    $data_nasc = mysqli_escape_string($connect, $_POST['data_nasc']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);

    $sql = "INSERT INTO clientes(nome_completo, email, telefone, genero, data_nasc, cidade, estado, endereco) VALUES 
    ('$nome_completo', '$email', '$telefone', '$genero', '$data_nasc', '$cidade', '$estado', '$endereco')";

    if (mysqli_query($connect, $sql)):
        header('Location: ../clientes.php?msg=sucesso_cadastro');
    else:
        header('Location: ../clientes.php?msg=erro');
    endif;
endif;
