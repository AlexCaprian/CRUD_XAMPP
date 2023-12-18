<?php
// Definição das constantes para conexão com o banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', ''); 
define('BASE', 'cadastro'); 

// Estabelece a conexão com o banco de dados utilizando MySQLi
$conn = new MySQLi(HOST, USER, PASS, BASE);

// Verifica se há erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Se chegou até aqui, a conexão foi bem-sucedida
?>
