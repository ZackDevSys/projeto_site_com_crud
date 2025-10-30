<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
//***************CONEXÃO***************
include_once 'php-action/db_connect.php';
?>

<body>
    <div class="box">
        <form action="php-action/create.php" method="POST">
            <fieldset>
                <legend><b>Novo Cliente</b></legend><br>

                <div class="inputBox">
                    <input type="text" name="nome_completo" id="nome_completo" class="inputUser" required>
                    <label for="nome_completo" class="labelInput">Nome Completo</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>
                <p><b>Sexo</b></p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br><br>
                <label for="data_nasc"><b>Data de Nascimento: </b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>

                <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                    <input type="submit" name="btn-cadastrar" class="btn-cadastrar" value="Cadastrar">
                    <a href="clientes.php" class="cliente">Clientes</a>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>