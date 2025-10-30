<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="styleclientes.css">
</head>

<?php
//***************CONEXÃO***************
include_once 'php-action/db_connect.php'
?>

<?php
//***************MENSAGENS***************
if (isset($_GET['msg'])):
    switch ($_GET['msg']):
        case 'sucesso_cadastro':
            echo '<div class="msg sucesso">✅  Cliente cadastrado com sucesso !</div>';
            break;
        case 'sucesso_edicao':
            echo '<div class="msg sucesso">✏️  Cliente editado com sucesso !</div>';
            break;
        case 'sucesso_exclusao':
            echo '<div class="msg sucesso">🗑️  Cliente excluído com sucesso !</div>';
            break;
        case 'erro':
            echo '<div class="msg erro">❌  Ocorreu um erro. Tente novamente.</div>';
            break;
    endswitch;
endif;
?>

<body>

    <div class="table">

        <table class="inputbox">

            <h1 class="title"> Clientes </h1>

            <thead class="subtitle">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Nascimento</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)): ?>
                    <tr>
                        <th><?php echo $dados['nome_completo']; ?></th>
                        <th><?php echo $dados['email']; ?></th>
                        <th><?php echo $dados['telefone']; ?></th>
                        <th><?php echo $dados['endereco']; ?>, <?php echo $dados['cidade']; ?>, <?php echo $dados['estado']; ?></th>
                        <th><?php echo $dados['data_nasc']; ?></th>

                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="edit">Editar</a></td>

                        <td>
                            <a href="#modal-container<?php echo $dados['id']; ?>" onclick="openModal(<?php echo $dados['id']; ?>)" class="excluir">Excluir</a>
                        </td>
                    </tr>

                    <div id="modal-container<?php echo $dados['id']; ?>" class="modal-container">
                        <div class="modal">
                            <div class="botoes">
                                <form action="php-action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-del" class="btn-del">Sim, excluir cliente</button>
                                </form>
                                <button class="btn-return" id="fechar" onclick="closeModal(<?php echo $dados['id']; ?>)">Não, cancelar operação</button>
                            </div>
                            <h1>Opa!</h1>
                            <h3>Tem certeza que deseja excluir cliente?</h3>
                            <h5>Esta operação não poderá ser mais desfeita.</h5>
                        </div>
                    </div>

                <?php
                endwhile
                ?>

            </tbody>
        </table>

        <a href="cadastro-cliente.php" class="add">Adicionar Cliente</a>
        <a href="index.html" class="voltar">Voltar</a>

    </div>

    <script src="script.js"></script>

</body>

</html>