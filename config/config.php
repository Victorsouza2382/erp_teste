<?php
// Configurações do Banco de Dados
$host = 'localhost';
$db   = 'mini_erp'; // Nome do banco criado via schema.sql
$user = 'root';     // Usuário do MySQL
$pass = '';         // Senha do MySQL (geralmente vazia no local)
$charset = 'utf8mb4';

// DSN - Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Opções do PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Erros lançam exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorno de dados como arrays associativos
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa prepared statements nativos
];

// Conexão com o Banco
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // Exibe erro e para o script
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
