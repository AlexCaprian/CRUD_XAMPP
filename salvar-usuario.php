<?php
// Verifica a ação solicitada
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        // Recolhe os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        // Monta a query para inserir os dados na tabela usuarios
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a operação foi bem-sucedida e redireciona com um alerta
        if ($res == true) {
            print "<script> alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':
        // Recolhe os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        // Monta a query para atualizar os dados na tabela usuarios
        $sql = "UPDATE usuarios SET
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                WHERE
                    id=".$_REQUEST["id"];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a operação foi bem-sucedida e redireciona com um alerta
        if ($res == true) {
            print "<script> alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possível editar.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        // Monta a query para excluir um registro da tabela usuarios
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a operação foi bem-sucedida e redireciona com um alerta
        if ($res == true) {
            print "<script> alert('Excluído com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script> alert('Não foi possível excluir.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>
