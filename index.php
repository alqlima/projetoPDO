<?php 
//PDO: Definindo Acesso
$dsn = "mysql:dbname=teste;host=localhost";
$dbuser = "root";
$dbpass = "";
// Conectando ao Banco de Dados
try {
	$pdo = new PDO($dsn,$dbuser, $dbpass);
// Selecionando Dados
	$sql = "SELECT * FROM testeuser";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $usuario) {
			echo "Nome: ".$usuario["nome"]."<br>";
		}
	} else {
		echo "Não há usuários cadastrados!";
	}

}catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>