<?php 
	$host="localhost";
	$usuario="root";
	$senha="";
	$bd="tcc";
	$conect= mysqli_connect ($host, $usuario, $senha, $bd) or die (mysql_error()); /*conectar com o Banco de Dados, caso não conectar, dar erro */
	mysqli_select_db($conect, $bd);
	$consulta = "SELECT * FROM vendas"; /* consulta no mysql */
	$con = mysqli_query ($conect, $consulta) or die ("mysqli_error"); /* Efetua a consulta e mostra o erro caso aconteça */
?>
<!DOCTYPE html>
<HTML LANG="PT-BR">
<HEAD>
	<META CHARSET="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- SITE RESPONSIVO -->
	<TITLE> Gestão de Estoque </TITLE> <!-- título página -->
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="style2.css"> <!-- divs -->
	<link rel="stylesheet" type="text/css" href="teste.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="bot.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="form.css"> <!-- Estilo de formulário -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
	<link rel="stylesheet" type="text/css" href="tabela.css"> <!-- Estilização tabela -->
</HEAD>
<BODY>
	<DIV class="container"> 
		<HEADER  class="topo"> <!-- cabeçalho página -->
			<center>
			<H2><img src="agua.png"> DISTRIBUIDORA DE ÁGUA <img src="agua.png"></H2>
			</center>
		</HEADER>
		<HEADER class="titulo">
			<a href="cliente.php"><button class="button info"> Clientes </button></a>
			<a href="func.php"><button class="button info"> Funcionarios </button></a>
			<a href="gestao.php"><button class="button info"> Gestão </button></a>
		</HEADER>
		<NAV class="menu"> <!-- Lateral esquerda -->
			<center>
				<br> <br> <br> <br> <br> <br> <br> <a href="registrovendas.php"> <button class="botn info"> Inserir </button> </a>
			</center>
		</NAV>
	<DIV class="centro"> <!-- meio da página -->
	<DIV class="meio">
			<center>
		<table border="1">
		<tr>
			<td>ID</td>
			<td>CPF Cliente</td>
			<td>Código de Barras</td>
			<td>forma pag</td>
			<td>Quantidade</td>	
			<td>Valor Unitário</td>
			<td>Valor Total</td>
			<td>Observações</td>
		</tr>
		<?php 
		while($dado=$con->fetch_array()){ /* armazena as colunas do banco de dados na variável dado */
			?>	
		<tr>
			<td> <?php echo $dado ["ID_vendas"]; ?> </td>
			<td> <?php echo $dado ["CPF_cliente"]; ?> </td>
			<td> <?php echo $dado ["cod_barras"]; ?> </td>
			<td> <?php echo $dado ["forma_pag"]; ?> </td>
			<td> <?php echo $dado ["qtd"]; ?> </td>
			<td> <?php echo $dado ["valor_venda"]; ?> </td>
			<td> <?php echo $dado ["total"]; ?> </td>
			<td> <a href="obs.php?codigo="> Observações </a> </td>
		</tr>
		<?php }	?>
		</table>
			</center>
	</DIV>
	</DIV>	
	</DIV>
</BODY>
</HTML>