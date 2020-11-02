<?php
	require_once('./include/conexao.php');	
?>
			
<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Produtos - Full Stack Eletro</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/produtos.css">
		<script src="../js/funcoesProduto.js"></script>
	</head>

	<body>
		<!--MENU-->
		<?php
			include_once('./include/menu.html');
		?>

		<header>
			<h2>Produtos</h2>
			<hr>
		</header>		

		<section class="categoria">
			<h3>Categorias</h3>
			<ul>
				<li onclick="exibir_categoria('todos')">Mostrar todos (12)</li>
				<li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
				<li onclick="exibir_categoria('fogao')">Fogão (2)</li>
				<li onclick="exibir_categoria('microondas')">Micro-ondas (3)</li>
				<li onclick="exibir_categoria('lavadouraroupa')">Lavadoura de Roupas (2)</li>
				<li onclick="exibir_categoria('lavalouca')">Lava Louças (2)</li>
			</ul>
		</section>

		<section class="produtos">
			<?php
				$sql = "SELECT * FROM produto";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
			?>			
					<div class="produto_unidade" id="<?php echo $rows["categoria"]?>">
						<img src="../<?php echo $rows["imagem"]?>" onmouseover="aumentarImg(this)" onmouseout="diminuirImg(this)">
						<p class="nome_produto"><?php echo utf8_encode($rows["descricao"])?></p>
						<hr>
						<p class="preco_antigo">R$ <?php echo $rows["preco"]?></p>
						<p class="preco_novo">R$ <?php echo $rows["precofinal"]?></p>
						<a href="./comprarProduto.php?comprar=<?php echo $rows["idproduto"]?>"><input class="botao_comprar" value="Comprar"></a>
					</div>
			<?php
					}
				} else{
					echo "Nenhum Produto Cadastrado!!!";
				}
			?>
		</section>

		<footer id="rodape">
			<?php
				include_once('./include/rodape.html');
			?>
		</footer>
	</body>
</html>