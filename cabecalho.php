<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php print $cabecalho_title; ?></title>
		<link rel="stylesheet" href="css/reset.css">
		<?php print @$cabecalho_css; ?>
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<meta name="viewport" content="width=device-width">
	</head>
	
	<body>
		<header class="container">             
			<h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
			<p class="sacola">Nenhum item na sacola de compra</p>

			<nav class="menu_opcoes">
				<ul>
					<li><a href="#" class="item-menu">Sua Conta</a></li>
					<li><a href="#" class="item-menu">Lista de Desejos</a></li>
					<li><a href="#" class="item-menu">Cartão Fidelidade</a></li>
					<li><a href="sobre.php" class="item-menu">Sobre</a></li>
					<li><a href="#" class="item-menu">Ajuda</a></li>
				</ul>
			</nav>                  
		</header>   
	</body>	
</html>