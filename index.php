<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Full Stack Eletro</title>
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	</head>

	<body>
		<!-- MENU -->
		<!--Pelo index estar na pasta raiz, os links e imagens nao funcionam.
		Por isso criei um novo arquivo para fazer o include, com o endereco das imagens e links certos.
		O mesmo vale para o rodape.-->
		<?php
			include_once('./php/include/menuIndex.html');
		?>
		
		<header>
			<h2>Seja bem vindo(a)!</h2>
			<hr>
		</header>

		<main>
			<p>Aqui em nossa loja, <i>programadores tem desconto </i>nos produtos para sua casa!</p>
		</main>	

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		<footer id="rodape">
			<?php
				include_once('./php/include/rodapeIndex.html');
			?>
		</footer>
	</body>
</html>