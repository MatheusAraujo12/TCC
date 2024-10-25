<?php
$host = 'localhost';
$dbname = 'tcc';
$user = 'admin';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

if (isset($_SESSION)) {
}else{
    session_start();
}
?>