<html>	
	<head>
		<link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/mobile2.css">
		<link rel="stylesheet" href="css/estilos.css"> 
		<link rel="stylesheet" href="css/produto.css">
	</head>
	<body>
		<?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; ?>
		
		<?php
			$cabecalho_title = "Produto da Mirror Fashion";			
			include("cabecalho.php");		
		?>
		
		<div class="produto">
			<h1>Fuzzy Cardigan</h1>
			<p>por apenas R$ 129,00</p>
			
			<form class="cores">
				<fieldset>
					<legend>Escolha a cor</legend>

					<input type="radio"  name="cor" value="verde" id="verde" checked>
					<label for="verde"><img src="img/produtos/foto2-verde.png" alt="Produto na cor verde"></label>

					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa"><img src="img/produtos/foto2-rosa.png" alt="Produto na cor rosa"></label>

					<input type="radio" name="cor" value="azul" id="azul">
					<label for="azul"><img src="img/produtos/foto2-azul.png" alt="Produto na cor azul"></label>

					<input type="submit" class="comprar" value="Comprar">
				</fieldset>
			</form>
		</div>
		<?php include("rodape.php"); ?>			
	</body>
</html>