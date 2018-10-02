<!DOCTYPE html>
<HTML LANG="PT-BR">
<HEAD>
	<META CHARSET="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- SITE RESPONSIVO -->
		<TITLE> Registro de Produto </TITLE>
	<script> /* mascara CPF */
		function formatar(mascara, documento){
 		 var i = documento.value.length;
 		 var saida = mascara.substring(0,1);
 		 var texto = mascara.substring(i)
 		 if (texto.substring(0,1) != saida){
         documento.value += texto.substring(0,1);
 	 	}  
		}
	</script> <!-- fim máscara CPF -->
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="style3.css"> <!-- divs -->
	<link rel="stylesheet" type="text/css" href="teste.css"> <!-- botões -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
	<link rel="stylesheet" type="text/css" href="fieldset.css"> <!-- ESTILO FIELDSET -->
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
		<form method="post" action="registravenda.php">
			<label for="CPFcliente">
				CPF Cliente:        
			</label>
			<input id="CPF_cliente" class="txt bradius" type="text" name="CPF_cliente" placeholder="000.000.000-00" minlength="14" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required="required">
				<br>
			<label for="cod_barras">
				Código de Barras:  
			</label>
			<input type="text" name="cod_barras" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="qtd">
				Quantidade:        
			</label>
			<input type="text" name="qtd" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="forma_pag">
				Forma Pgto:        
			</label>
			<select class="txt bradius" name="forma_pag">
				<option>Selecione...</option>
				<option>Dinheiro</option>
				<option>Cartão</option>
			</select>
				<br>
			<label for="valor_venda">
				Valor Unitário:     
			</label>
			<input type="text" name="valor_venda" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
			<label for="total">
				Valor Total:        
			</label>
			<input type="text" name="total" class="txt bradius" required="required"> <!-- caixa de texto obrigatória -->
				<br>
				<br>
				<center>
			<a href="javascript:window.history.go(-1)"> <button type="button" class="button info"> Cancelar </button> </a>
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