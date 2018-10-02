<?php 
	$host="localhost";
	$usuario="root";
	$senha="";
	$bd="tcc";
	$conect= mysqli_connect ($host, $usuario, $senha, $bd) or die (mysql_error()); /*conectar com o Banco de Dados, caso não conectar, dar erro */
	mysqli_select_db($conect, $bd);
	$consulta = "SELECT * FROM produto"; /* consulta no mysql */
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
			<a href="vendas.php"><button class="button info"> Vendas </button></a>
		</HEADER>
		<DIV class="menu"> <!-- Lateral esquerda -->
			<center>
				<br> <br> <br> <br> <br> <br> <br> <a href="registroproduto.php"> <button class="botn info"> Inserir </button> </a>
			</center>
		</DIV>
	<DIV class="centro"> <!-- meio da página -->
	<DIV class="meio">
			<center>
		<table border="1">
		<tr>
			<td>ID</td>
			<td>Marca</td>
			<td>Cód de Barras</td>
			<td>Tamanho</td>
			<td>Quantidade</td>
			<td>Validade</td>	
			<td>Valor Compra</td>	
			<td>Valor Unitário</td>
			<td>Ação</td>
			<td>Situação</td>
		</tr>
		<?php 
		while($dado=$con->fetch_array()){ /* armazena as colunas do banco de dados na variável dado */
			?>	
		<tr>
			<td> <?php echo $dado ["ID_produtos"]; ?> </td>
			<td> <?php echo $dado ["marca"]; ?> </td>
			<td> <?php echo $dado ["cod_barras"]; ?> </td>
			<td> <?php echo $dado ["tamanho"]; ?> </td>
			<td> <?php echo $dado ["qtd"]; ?> </td>
			<td> <?php echo $dado ["validade"]; ?> </td>
			<td> <?php echo $dado ["valor_compra"]; ?> </td>
			<td> <?php echo $dado ["valor_venda"]; ?> </td>
			<td> <a href="produto_editar.php?codigo="> Editar </a> </td>
			<td>Ativo</td>
		</tr>
		<?php }	?>
		</table>
			</center>
	</DIV>
	</DIV>	
	</DIV>
</BODY>
</HTML>