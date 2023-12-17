<?php
// Definição das constantes para conexão com o banco de dados
define('HOST', 'localhost'); // Endereço do servidor MySQL (geralmente 'localhost')
define('USER', 'root');      // Nome de usuário do MySQL
define('PASS', '');          // Senha do usuário do MySQL
define('BASE', 'cadastro');  // Nome do banco de dados que você está usando

// Estabelece a conexão com o banco de dados utilizando MySQLi
$conn = new MySQLi(HOST, USER, PASS, BASE);

// Verifica se há erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Se chegou até aqui, a conexão foi bem-sucedida
// O objeto $conn agora contém a conexão ativa com o banco de dados
// Você pode usá-lo para executar consultas e interagir com o banco de dados
?>
