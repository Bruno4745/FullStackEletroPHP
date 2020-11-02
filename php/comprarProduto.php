<?php

    require_once('./include/conexao.php');	

    if(isset($_GET['comprar'])){
        $id = $_GET['comprar'];
        
        $sql = "SELECT * FROM produto WHERE idproduto = $id;";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link rel="stylesheet" type="text/css" href="../css/comprarProduto.css">
        <script src="../js/funcoesProduto.js"></script>

        <title>Formulario de Compra</title>
    </head>

    <body>
        <?php
            include_once('./include/menu.html');
        ?>
            
        <header>
            <h2>Formulario de Compra</h2>
            <hr>
        </header>

        <form method="post" action="" name="formulario_compra" class="form_compra">
            <div class="imagem">
                <img src="../<?php echo $row['imagem']?>">
            </div>
            <div class="form">
                <h4>Nome:</h4>
                <input class="caixa_texto" type="text" name="nome" required>
                <h4>Endereco:</h4>
                <input class="caixa_texto" type="text" name="endereco" required>
                <h4>Telefone:</h4>
                <input class="caixa_texto" type="text" name="telefone" required>
                <h4>Produto:</h4>
                <input class="caixa_texto" type="text" name="produto" value="<?php echo utf8_encode($row['descricao'])?>" readonly>
                <h4>Valor Unitario:</h4>
                <input class="caixa_texto" type="number" name="valor" value="<?php echo $row['precofinal']?>" readonly>
                <h4>Quantidade:</h4>
                <input class="caixa_texto" type="number" name="quantidade" value="1" onchange="calcValorTotal()" min="1" required>
                <h4>Valor Total:</h4>
                <input class="caixa_texto" type="number" name="total" value="<?php echo $row['precofinal']?>" readonly>
                </br></br>
                <input class="botao" type="submit" value="Comprar">
                <input class="botao" type="reset" value="Limpar">
                <a href="./produtos.php"><input class="botao" value="Voltar"></a>
                <?php
                    require('./action/finalizarCompra.php');
                ?>
            </div>
        </form>
        
		<footer id="rodape">
			<?php
				include_once('./include/rodape.html');
			?>
		</footer>
    </body>
</html>