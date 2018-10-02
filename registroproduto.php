<!DOCTYPE html>
<HTML LANG="PT-BR">
<HEAD>
	<META CHARSET="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- SITE RESPONSIVO -->
	<TITLE> Registro de Produto </TITLE>
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="div.css"> <!-- divs -->
	<link rel="stylesheet" type="text/css" href="teste.css"> <!-- botões -->
		<link rel="stylesheet" type="text/css" href="fieldset.css"> <!-- ESTILO FIELDSET -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
	<link rel="stylesheet" type="text/css" href="form.css"> <!-- Estilo de formulário -->
</HEAD>
<BODY>
	<DIV class="container">
		<HEADER  class="topo">
				<center>
			<H2><img src="agua.png"> DISTRIBUIDORA DE ÁGUA <img src="agua.png"></H2>
				</center>
		</HEADER>
		<NAV class="menu">

		</NAV>
	<DIV class="centro">
	<DIV class="meio">
		<fieldset>
		<form method="post" action="registraproduto.php">
			<label for="marca">
				Marca:              
			</label>
			<input type="text" class="txt bradius" name="marca" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="cod_barras">
				Cód. de Barras:     
			</label>
			<input type="text" name="cod_barras" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="tamanho">
				Tamanho:           
			</label>
			<input type="text" name="tamanho" class="txt bradius" required="required"> <!-- campo obrigatório -->
				<br>
			<label for="qtd">
				Quantidade:         
			</label>
			<input type="text" name="qtd" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="validade">
				Validade:            
			</label>
			<input type="date" name="validade" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="registro">
				Data de Registro:   
			</label>
			<input type="date" name="registro" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="valor_compra">
				Valor Compra:      
			</label>
			<input type="text" class="txt bradius" name="valor_compra"> <!-- caixa de texto -->
				<br>
			<label for="valor_venda">
				Valor Venda:        
			</label>
			<input type="text" name="valor_venda" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
				<center>
			<a href="javascript:window.history.go(-1)"> <button class="button info" type="button"> Cancelar </button> </a>
			<input type="submit" class="button info" value="Continuar">
				</center>
		</form>
		</fieldset>
	</DIV>
	</DIV>
		<ASIDE class="banner">
			
		</ASIDE>
	</DIV>
</BODY>
</HTML>