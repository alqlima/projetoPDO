<?php 
//PDO: Definindo Acesso
$dsn = "mysql:dbname=nome;host=localhost";
$dbuser = "root";
$dbpass = "";
// Conectando ao Banco de Dados
try {
	$pdo = new PDO($dsn,$dbuser, $dbpass);
	echo "Conexão estabelecida com Sucesso!!!";
}catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>