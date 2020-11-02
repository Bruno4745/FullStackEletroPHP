<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Nossas Lojas - Full Stack Eletro</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/loja.css">
	</head>

	<body>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<header>
			<h2>Nossas Lojas</h2>
			<hr>
		</header>

		<section class="lojas">
			<div class="loja_unidade">
				<h3>Sao Paulo</h3>
				<p>Avenida Paulista, 985</p>
				<p>3 &ordm; andar</p>
				<p>Jardins</p>
				<p>(11) 1234-5678</p>
			</div>
			<div class="loja_unidade">
				<h3>Rio de Janeiro</h3>
				<p>Avenida Presidente Vargas, 214</p>
				<p>10 &ordm; andar</p>
				<p>Centro</p>
				<p>(21) 8765-4321</p>
			</div>
			<div class="loja_unidade">
				<h3>Santa Catarina</h3>
				<p>Rua Major &Aacute;vila, 237</p>
				<p>Vila Mariana</p>
				<p>(47) 1357-2468</p>
			</div>
		</section>

		<footer id="rodape">
			<?php
				include_once('./include/rodape.html');
			?>
		</footer>
	</body>
</html>