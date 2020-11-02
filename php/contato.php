<?php
	require_once('./include/conexao.php');

	if(!empty($_POST['nome']) and !empty($_POST['mensagem'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
				
		$sql = "INSERT INTO comentario (nome, mensagem) VALUES ('$nome', '$mensagem')";
		$result = $conn->query($sql);			

		?>
			<script>
				alert("Comentario enviado com sucesso!");
			</script>
		<?php
	}
?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Contato - Full Stack Eletro</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/contato.css">
	</head>

	<body>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<header>
			<h2>Contato</h2>
			<hr>
		</header>

		<section class="contato">
			<div class="forma_contato">
				<img src="../imagens/email.png">
				<p>contato@fullstackeletro.com</p>
			</div>
			<div class="forma_contato">
				<img src="../imagens/whatsapp.png">
				<p>(11) 2222-3333</p>
			</div>
		</section>

		<form class="formulario" method="post" action="">
			<div class="campo_formulario">
				<h4>Nome: </h4>
				<input type="text" name="nome" required>
				<h4>Mensagem: </h4>
				<textarea name="mensagem" required></textarea>
			</div>
			<br>
			<input class="botao" type="submit" name="submit" value="Enviar">
			<input class="botao" type="reset" name="submit" value="Limpar">
		</form>

		<?php
			$sql = "SELECT * FROM comentario;";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				while($rows = $result->fetch_assoc()){
					echo '<hr>Data: ', $rows['data'];
					echo '<br>Nome: ', $rows['nome'];
					echo '<br>Comentario: ', $rows['mensagem'];
				}
			}
		?>

		<footer id="rodape">
			<?php
				include_once('./include/rodape.html');
			?>
		</footer>
	</body>
</html>