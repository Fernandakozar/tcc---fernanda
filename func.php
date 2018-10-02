<?php 
	$host="localhost";
	$usuario="root";
	$senha="";
	$bd="tcc";
	$conect= mysqli_connect ($host, $usuario, $senha, $bd) or die (mysql_error()); /*conectar com o Banco de Dados, caso não conectar, dar erro */
	mysqli_select_db($conect, $bd);
	$consulta = "SELECT * FROM usuario"; /* consulta no mysql */
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
			<a href="gestao.php"><button class="button info"> Gestao </button></a>
			<a href="cliente.php"><button class="button info"> Clientes </button></a>
			<a href="vendas.php"><button class="button info"> Vendas </button></a>
		</HEADER>
		<NAV class="menu"> <!-- Lateral esquerda -->
			<center>

			</center>
		</NAV>
	<DIV class="centro"> <!-- meio da página -->
	<DIV class="meio">
		<center>
		<table border="1">
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>CPF</td>
			<td>Cargo</td>
			<td>Ação</td>
			<td>Situação</td>
			<td>Data Cadastro</td>
		</tr>
		<?php 
		while($dado=$con->fetch_array()){ /* armazena as colunas do banco de dados na variável dado */
			?>	
		<tr>
			<td> <?php echo $dado ["ID_vendedor"]; ?> </td>
			<td> <?php echo $dado ["nome"]; ?> </td>
			<td> <?php echo $dado ["CPF"]; ?> </td>
			<td> <?php echo $dado ["cargo"]; ?> </td>
			<td> <a href="func_editar.php?codigo="> Editar </a> </td>
			<td><?php echo $dado ["situacao"]; ?></td>
			<td><?php echo $dado ["datacadastro"]; ?></td>
		</tr>
		<?php }	?> <!-- fecha php que iniciou antes do tr -->
		</table>
		</center>
	</DIV>
	</DIV>	
	</DIV>
</BODY>
</HTML>