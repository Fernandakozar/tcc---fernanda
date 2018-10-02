<?php
	// sistema de login
	include("classes/conexao.php"); //conecta o banco de dados 

	$erro = [];

	if(isset($_POST['CPF']) && strlen($_POST['CPF']) > 0){
		// SE EXISTIR O POST CPF REALIZA LOGIN
		if(!isset($_SESSION))
			session_start();

		$_SESSION['CPF'] = $mysqli->escape_string($_POST['CPF']); //LIMPA DADO DE TENTATIVAS DE ATAQUE
		$_SESSION['senha'] = md5(md5($_POST['senha'])); //SENHA CRIPTOGRAFADA

		$sql_code = "SELECT senha, ID_vendedor FROM usuario WHERE CPF = '$_SESSION[CPF]'"; // CONEXÃO COM BANCO PARA VERIFICAR DADOS
		$sql_query = $mysqli->query($sql_code) or die ($mysqli->error); // EXECUTA CÓDIGO E SE NÃO DER CERTO MOSTRA ERRO
		$dado = $sql_query->fetch_assoc(); // RESULTADO
		$total = $sql_query->num_rows; // CONTADOR

		if($total == 0){
			$erro[] = "Este CPF não pertence à nenhum usuário!"; // SE TOTAL FOR = 0 MOSTRAR ERRO
		} else{

			if($dado['senha'] == $_SESSION['senha']){ // SE SENHA FOR CORRETA, REALIZA LOGIN

				$_SESSION['usuário'] = $dado['ID_vendedor']; // SENHA COMPATIVEL COM ID, REALIZA LOGIN

			} else{

				$erro[] = "Senha incorreta!"; // MENSAGEM DE ERRO PARA SENHA INCORRETA

			}
		
		}

		if(count($erro) == 0 || !isset($erro)){ // SE TOTAL DE ERRO FOR 0, REDIRECIONA PARA O SISTEMA
			echo "<script>alert('Login efetuado com sucesso!'); location.href='gestao.php'</script>";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- SITE RESPONSIVO -->
	<title>Home</title>
	<script> /* MÁSCARA CPF */
			function formatar(mascara, documento){
 			 var i = documento.value.length;
 			 var saida = mascara.substring(0,1);
 			 var texto = mascara.substring(i)
 			 if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
 			 }  
			}
	</script> <!-- FIM SCRIPT MÁSCARA CPF -->
	<link rel="shortcut icon" href="agua.png" type="image/x-icon" /> <!-- imagem barraga navegação -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- divs -->
	<link rel="stylesheet" type="text/css" href="bot.css"> <!-- botões -->
	<link rel="stylesheet" type="text/css" href="form.css"> <!-- Estilo de formulário -->
	<link rel="stylesheet" type="text/css" href="fieldset.css"> <!-- ESTILO FIELDSET -->
	<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet"> <!--Fonte botão -->
	<link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet"> <!-- Fonte Site -->
</head>	
<body>
	<DIV class="container"> 
		<HEADER  class="topo"> <!-- cabeçalho página -->
			<center>
			<H2><img src="agua.png"> DISTRIBUIDORA DE ÁGUA <img src="agua.png"></H2> <!-- CABEÇALHO PÁGINA -->
			</center>
		</HEADER>
		<NAV class="menu"> <!-- Lateral esquerda -->
			<center>
				<br> <br> <br> <a href="registrofunc.php"> <button class="botn info"> Registrar-se </button> </a>
			</center>
		</NAV>
	<DIV class="centro"> <!-- meio da página -->
		<font size="2px" color="white">
			<center>
			<?php //MOSTRA MENSAGEM DE ERRO LOGIN INCORRETO
				if (count($erro) > 0) 
				foreach($erro as $msg){
					echo "<p>$msg</p>";
				}
			?>
			</center>
		</font>
	<DIV class="meio">
		<fieldset>
		<form method="post" action=""> <!-- formulário Login -->
				<br>
			<label for="CPF">
				🔑 CPF:   
			</label>
			<input class="txt bradius tooltiptext" type="text" name="CPF" minlength="14" maxlength="14" placeholder="000.000.000-00" OnKeyPress="formatar('###.###.###-##', this)" size="23" required>
				<br>
				<br>
			<label for="password">
				🔑 SENHA:  
			</label>
			<input class="txt bradius" type="password" name="senha" maxlength="14" minlength="4" placeholder="Máximo 14 caracteres" required>
				<br>
				<br>
					<center>
			<input type="submit" class="botn info" value="Continuar">
					</center>
		</form>
		</fieldset>
	</DIV>
	</DIV>
		<ASIDE class="banner"> <!-- Lateral direita -->
				<center>

				</center>
		</ASIDE>
	</DIV>
</body>
</html>