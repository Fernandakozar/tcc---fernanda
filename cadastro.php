<?php
	$host="localhost";
	$usuario="root";
	$senha="";
	$bd="tcc";
	$conect= mysqli_connect ($host, $usuario, $senha, $bd) or die (mysql_error()); /*conectar com o Banco de Dados, caso não conectar, dar erro */
	mysqli_select_db($conect, $bd);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
<?php
$nome=$_POST['nome'];
$CPF=$_POST['CPF'];
$cargo=$_POST['cargo'];
$senha= md5(md5($_POST['senha'])); // senha criptografada
$sql= mysqli_query ($conect, "INSERT INTO usuario (nome, CPF, cargo, senha) VALUES ('$nome', '$CPF', '$cargo', '$senha')");
echo'
			<script type="text/javascript">
			alert("Cadastrado com sucesso!");
			location="login.php";
			</script>
		';
session_start();
$_SESSION['CPF']=$_POST['CPF'];
$_SESSION['senha']=$_POST['senha'];
?>
</body>
</html>