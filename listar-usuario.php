<h1>Listar Usuário</h1>

<?php
// Consulta SQL para selecionar todos os usuários
$sql = "SELECT * FROM usuarios";

// Executar a consulta e armazenar o resultado na variável $res
$res = $conn->query($sql);

// Verificar o número de linhas retornadas pela consulta
$qtd = $res->num_rows;

// Se houver registros retornados
if ($qtd > 0) {
    // Exibir uma tabela HTML para mostrar os dados
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ação</th>";
    print "</tr>";

    // Loop através dos resultados e exibir cada usuário em uma linha da tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{return false;}\" class='btn btn-danger'>Excluir</button>
               </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Se não houver resultados, exibir uma mensagem de alerta
    print "<p class='alert alert-danger'>Não foi encontrado resultado!</p>";
}
?>
