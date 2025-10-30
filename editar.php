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

//*****************EDIT*****************
if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id ='$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<body>
    <div class="box">
        <form action="php-action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <fieldset>
                <legend><b>Editar Cliente</b></legend><br>

                <div class="inputBox">
                    <input type="text" name="nome_completo" id="nome_completo" class="inputUser" value="<?php echo $dados['nome_completo']; ?>" required>
                    <label for="nome_completo" class="labelInput">Nome Completo</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $dados['email']; ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $dados['telefone']; ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>
                <p><b>Sexo</b></p>
                <input type="radio" id="feminino" name="genero" value="<?php echo $dados['genero']; ?>" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="<?php echo $dados['genero']; ?>" required>
                <label for="masculino">Masculino</label><br><br>
                <label for="data_nasc"><b>Data de Nascimento: </b></label>
                <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $dados['data_nasc']; ?>" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $dados['cidade']; ?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $dados['estado']; ?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $dados['endereco']; ?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br><br>

                <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                    <input type="submit" name="btn-editar" class="btn-editar" value="Editar">
                    <a href="clientes.php" class="cliente">Clientes</a>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>