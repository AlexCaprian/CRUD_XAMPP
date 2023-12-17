<h1 class="mb-4">Editar Usuário</h1>

<?php
// Consulta para selecionar os dados do usuário a ser editado
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="?page=salvar" method="POST">
                <!-- Campos ocultos para ação e ID do usuário -->
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row->id; ?>">
                
                <!-- Campo para o nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" id="nome">
                </div>
                
                <!-- Campo para o e-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" id="email">
                </div>
                
                <!-- Campo para a senha -->
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha">
                </div>
                
                <!-- Campo para a data de nascimento -->
                <div class="mb-3">
                    <label for="data_nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control" id="data_nasc">
                </div>
                
                <!-- Botão de envio -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
