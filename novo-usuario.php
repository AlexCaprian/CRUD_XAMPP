<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST" onsubmit="return validarFormulario()">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo para o nome -->
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" required>
    </div>

    <!-- Campo para o e-mail -->
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>

    <!-- Campo para a senha -->
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" id="senha" required>
    </div>

    <!-- Campo para a data de nascimento -->
    <div class="mb-3">
        <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="data_nasc" required>
    </div>

    <!-- Botão de envio -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

<script>
    function validarFormulario() {
        // Verifica se algum campo está vazio
        if (
            document.getElementById('nome').value === '' ||
            document.getElementById('email').value === '' ||
            document.getElementById('senha').value === '' ||
            document.getElementById('data_nasc').value === ''
        ) {
            alert('Por favor, preencha todos os campos.');
            return false; // Impede o envio do formulário
        }
        return true; // Permite o envio do formulário se todos os campos estiverem preenchidos
    }
</script>
