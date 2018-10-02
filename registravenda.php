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
	<title>Cadastro Venda</title>
</head>
<body>
<?php
$CPF_cliente=$_POST['CPF_cliente'];
$cod_barras=$_POST['cod_barras'];
$forma_pag=$_POST['forma_pag'];
$qtd=$_POST['qtd'];
$valor_venda=$_POST['valor_venda'];
$total=$_POST['total'];
$sql= mysqli_query ($conect, "INSERT INTO vendas (CPF_cliente, cod_barras, forma_pag, qtd, valor_venda, total) VALUES ('$CPF_cliente', '$cod_barras', '$forma_pag', '$qtd', '$valor_venda', '$total')");
echo'
			<script type="text/javascript">
			alert("Vanda cadastrada!");
			location="vendas.php";
			</script>
		';
session_start();
$_SESSION['CPF_cliente']=$_POST['CPF_cliente'];
$_SESSION['cod_barras']=$_POST['cod_barras'];
$_SESSION['forma_pag']=$_POST['forma_pag'];
$_SESSION['qtd']=$_POST['qtd'];
$_SESSION['valor_venda']=$_POST['valor_venda'];
$_SESSION['total']=$_POST['total'];
?>
</body>
</html>