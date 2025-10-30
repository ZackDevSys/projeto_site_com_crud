<?php

require_once 'db_connect.php';

if (isset($_POST['btn-del'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) {
        header('Location: ../clientes.php?msg=sucesso_exclusao');
        exit;
    } else {
        header('Location: ../clientes.php?msg=erro');
        exit;
    }
}

?>