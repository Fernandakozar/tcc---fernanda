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
	<title>Cadastro Cliente</title>
</head>
<body>
<?php
$nome_cliente=$_POST['nome_cliente'];
$endereco=$_POST['endereco'];
$CPF_cliente=$_POST['CPF_cliente'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$sql= mysqli_query ($conect, "INSERT INTO cliente (nome_cliente, endereco, CPF_cliente, tel, email) VALUES ('$nome_cliente', '$endereco', '$CPF_cliente', '$tel', '$email')");
echo'
			<script type="text/javascript">
			alert("Cliente cadastrado!");
			location="cliente.php";
			</script>
		';
session_start();
$_SESSION['nome_cliente']=$_POST['nome_cliente'];
$_SESSION['endereco']=$_POST['endereco'];
$_SESSION['CPF_cliente']=$_POST['CPF_cliente'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['email']=$_POST['email'];
?>
</body>
</html>