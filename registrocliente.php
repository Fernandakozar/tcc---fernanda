<!DOCTYPE html>
<HTML LANG="PT-BR">
<HEAD>
	<TITLE> REGISTRO CLIENTE </TITLE>
	<META CHARSET="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- SITE RESPONSIVO -->
	<script> /* MÁSCARA CPF */
			function formatar(mascara, documento){
 			 var i = documento.value.length;
 			 var saida = mascara.substring(0,1);
 			 var texto = mascara.substring(i)
 			 if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
 			 }  
			}
		</script> <!-- FIM MASCARA CPF -->
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- DIVS --> 
	<link rel="stylesheet" type="text/css" href="teste.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="bot.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="form.css"> <!-- Estilo de formulário -->
	<link rel="stylesheet" type="text/css" href="fieldset.css"> <!-- ESTILO FIELDSET -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
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
		<form method="post" action="registracliente.php">
			<label for="nome_cliente">
				Nome:        
			</label>
			<input class="txt bradius" type="text" name="nome_cliente" placeholder="Nome Cliente" required>
				<br>
			<label for="endereco">
				Endereço:     
			</label>
			<input class="txt bradius" type="text" name="endereco" placeholder="Endereço com número" required>
				<br>
			<label for="CPFcliente">
				CPF Cliente:  
			</label>
			<input id="CPF_cliente" class="txt bradius" type="text" name="CPF_cliente" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
				<br>
			<label for="tel">
				Telefone:      
			</label>
			<input id="tel" class="txt bradius" type="tel" name="tel" maxlength="14" placeholder="(00)00000-0000" required>
				<br>
			<label for="email">
				E-mail:       
			</label>
			<input id="email" class="txt bradius" type="email" name="email" placeholder="nome@gmail.com"">
				<br>
				<center>
			<a href="javascript:window.history.go(-1)"> <!-- Voltar a pág anterior --> 
				<button class="button info" type="button"> Cancelar </button> </a> <!-- botão para voltar a página anterior -->
			<input type="submit" class="button info" value="Continuar">
				</center>
		</form>
		</fieldset>
	</DIV>
	</DIV>
		<ASIDE class="banner">
			<center>
					
			</center>
		</ASIDE>
	</DIV>
</BODY>
</HTML>