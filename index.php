<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
		<title>Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/mobile2.css">
		<link rel="stylesheet" href="css/estilos.css">        
        <link rel="stylesheet" href="css/mobile.css" media="(max-width:419px)">
	</head>
	<body>	           
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
            <!--<header class="container">
             
                <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
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
                   
            </header>   -->
		<?php include("cabecalho.php");?>
        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
                 <form action="http://www.google.com.br/search" id="form-busca">
                    <input type="search" name="q" id="q">
                    <input type="image" src="img/busca.png" class="lupa"> 
                </form>
            </section><!-- fim .busca -->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li><a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisa casual</a></li>
							</ul>
						</li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
        </div><!-- fim .container .destaque -->
        <div class="destaque2">
        	<img src="img/destaque-home.png" alt="Promoção: Big City Night">
			<div class="butao">
				<a href="#" class="pause"></a>
			</div>
		</div>
        
        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <!-- Primeiro Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Segundo Produto -->
                     <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Terceiro Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura11.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Quarto Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura12.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Quinto Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura13.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Sexto Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura15.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
            <!-- Produtos Mais Vendidos -->
            <section class="painel mais-vendidos">
                <h2>Produtos Mais Vendidos</h2>
                <ol>
                    <!-- Primeiro Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Segundo Produto -->
                     <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- Terceiro Produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura15.png">
                                <figcaption>Fuzz Cardigan por R$ 169,90</figcaption>
                            </figure>
                        </a>
                    </li>
                  
                </ol>
            </section>
			
        </div>
        <!--<footer>
            <div class="container">
                <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
                    <ul class="social">
                        <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
                        <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
                        <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
                    </ul>
            </div>
        </footer>-->
		<?php include("rodape.php");?>
        <script src="script/home.js"></script>
	</body>
</html>