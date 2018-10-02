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
	<title>Cadastro Produto</title>
</head>
<body>
<?php
$marca=$_POST['marca'];
$cod_barras=$_POST['cod_barras'];
$tamanho=$_POST['tamanho'];
$qtd=$_POST['qtd'];
$validade=$_POST['validade'];
$registro=$_POST['registro'];
$valor_compra=$_POST['valor_compra'];
$valor_venda=$_POST['valor_venda'];
$sql= mysqli_query ($conect, "INSERT INTO produto (marca, cod_barras, tamanho, qtd, validade, registro, valor_compra, valor_venda) VALUES ('$marca', '$cod_barras', '$tamanho', '$qtd', '$validade', '$registro', '$valor_compra', '$valor_venda')");
echo'
			<script type="text/javascript">
			alert("Produto cadastrado!");
			location="gestao.php";
			</script>
		';
session_start();
$_SESSION['marca']=$_POST['marca'];
$_SESSION['cod_barras']=$_POST['cod_barras'];
$_SESSION['tamanho']=$_POST['tamanho'];
$_SESSION['qtd']=$_POST['qtd'];
$_SESSION['validade']=$_POST['validade'];
$_SESSION['registro']=$_POST['registro'];
$_SESSION['valor_compra']=$_POST['valor_compra'];
$_SESSION['valor_venda']=$_POST['valor_venda'];
?>
</body>
</html>