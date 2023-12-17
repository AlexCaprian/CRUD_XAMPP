<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Importando o arquivo CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Itens da barra de navegação -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php
                // Incluindo o arquivo de configuração e realizando o roteamento com base na variável 'page'
                include('config.php');
                switch (@$_REQUEST["page"]) {
                    case 'novo':
                        include("novo-usuario.php"); // Inclui a página para criar um novo usuário
                        break;
                    case 'listar':
                        include("listar-usuario.php"); // Inclui a página para listar usuários
                        break;
                    case 'salvar':
                        include("salvar-usuario.php"); // Inclui a página para salvar informações do usuário
                        break;
                    case 'editar':
                        include("editar-usuario.php"); // Inclui a página para editar um usuário
                        break;
                    default:
                        print "<div class='text-center'><h1>Bem vindo!</h1></div>"; // Página inicial padrão quando 'page' não está definido
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Importando o arquivo JavaScript do Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
