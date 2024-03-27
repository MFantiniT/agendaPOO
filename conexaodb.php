<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "agenda"; //nome do banco de dados

try {
    $conn = new PDO("mysql:host=$host;dbname=$banco", $user, $pass);
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit;
}
