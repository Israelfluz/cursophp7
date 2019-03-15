<?php

require_once("config.php");

//Carrega um usuário essa parte do código
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//Carrega uma lista de usuários essa parte do código
//$lista = Usuario::getList();
//echo json_encode($lista);



//Carrega um lista de usuários buscando pelo login
//$search - Usuario::search("user");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Israel", "123456");
//echo $usuario;




//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);
/*
$aluno = new Usuario("aluno", "@lun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

$aluno->insert(); 

echo $aluno;
*/

//$usuario = new Usuario();

//$usuario->loadbyId(7);

//$usuario->update("Professor", "!@#$%ˆ&*");

$usuario = new Usuario();

$usuario->loadbyId(7);

	echo"<pre>";
	//print_r($usuario->getList());
	echo"</pre>";
echo "<table border='1'>";
	
foreach ($usuario->getList() as $key => $value) {
	echo "<tr>";
		echo "<td>";
		echo $value['idusuario'];
		echo "<td>";

		echo "<td>";
		echo $value['deslogin'];
		echo "<td>";

		echo "<td>";
		echo $value['dessenha'];
		echo "<td>";

		echo "<td>";
		echo "<a href='alterar.php?id=". $value['idusuario']."'>Alterar". $value['idusuario']."</a>";
		echo "<td>";

		echo "<td>";
		echo "<a href='delete.php?id=". $value['idusuario']."'>Excluir". $value['idusuario']."</a>";
		echo "<td>";
	echo "</tr>";
}
echo "</table>";
//$usuario->delete();

echo $usuario;


?>