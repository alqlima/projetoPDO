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
// Inserindo Dados
	/*$nome = "Testador3";
	$email = "testador3@hotmail.com";
	$senha = md5("abc45");
	$sql = "INSERT INTO testeuser SET nome = '$nome', email = '$email', senha = '$senha'";
	$sql = $pdo->query($sql);
	echo "Usuario inserido: ".$pdo->lastInsertId();*/
//Atualizando Dados
	$sql = "UPDATE testeuser SET email= 'novo@hotmail.com' WHERE email= 'testador_2a@hotmail.com'";
	$sql = $pdo->query($sql);
	echo "Usuário alterado com sucesso!";
// Deletando Dados
	$sql = "DELETE FROM testeuser WHERE id = 6";
	$pdo->query($sql);
	echo "Usuário deletado com sucesso!";


}catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>