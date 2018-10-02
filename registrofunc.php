<!DOCTYPE html>
<HTML LANG="PT-BR">
<HEAD>
	<TITLE> Registro de Funcionário </TITLE>
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
	</script>
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- divs -->
	<link rel="stylesheet" type="text/css" href="bot.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="fieldset.css"> <!-- ESTILO FIELDSET -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
	<link rel="stylesheet" type="text/css" href="form.css"> <!-- Estilo de formulário -->
</HEAD>
<BODY>
	<DIV class="container"> 
		<HEADER  class="topo"> <!-- Cabeçalho -->
			<center>
				<H2><img src="agua.png"> DISTRIBUIDORA DE ÁGUA <img src="agua.png"></H2>
			</center>
		</HEADER> <!-- fim cabeçalho -->
		<NAV class="menu"> <!-- Lateral Esquerda -->
			
		</NAV> <!-- Fim lateral esquerda -->
	<DIV class="centro"> <!-- Meio da página -->
	<DIV class="meio">
		<fieldset>
		<form method="post" action="cadastro.php"> <!-- Formulário registro func -->
			<label for="nome">
				👤 Nome:   
			</label>
			<input id="nome" class="txt bradius" type="text" name="nome" required="required" placeholder="Seu Nome">
			<br>
			<label for="CPF">
				🔑 CPF:    
			</label>
			<input id="CPF" class="txt bradius" type="text" name="CPF" minlength="14" maxlength="14" placeholder="000.000.00.-00" OnKeyPress="formatar('###.###.###-##', this)" size="23" required>
				<br>
			<label>
				💧 Cargo:   
			</label>
		<select class="txt bradius" name="cargo">
			<option>Selecione...</option>
			<option>GERENTE</option>
			<option>VENDEDOR</option>
			<option>ENTREGADOR</option>
			<option>CAIXA</option>
		</select>
				<br>
			<label for="senha">
				🔑 Senha:   
			</label>
			<input id="senha" class="txt bradius" type="password" name="senha" minlength="4" maxlength="14" placeholder="Máximo 14 caracteres" required>
				<br>
				<br>
			<center>
			<a href="javascript:window.history.go(-1)"> <button class="botn info" type="button"> Cancelar </button> </a>
			<input type="submit" class="botn info" value="Continuar">
			</center>
		</form>
		</fieldset>
	</DIV>
	</DIV>
		<ASIDE class="banner"> <!-- Lateral Direita -->
			<center>
	
			</center>
		</ASIDE>	
	</DIV>
</BODY>
</HTML>