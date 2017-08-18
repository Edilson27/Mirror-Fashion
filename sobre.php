<!DOCTYPE html>
<html>

<!--<head>
    <meta charset="utf-8">
    <title>Sobre a Mirror Fashion</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width:419px)">
</head> -->
	<?php
		$cabecalho_title = "Sobre a Mirror Fashion";			
		include('cabecalho.php');
	?>
<body>
	
	
    
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   
	<!--<header class="container">
        <h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
            <p class="sacola">Nenhum item na sacola de compra</p>
            <nav class="menu_opcoes">
                <ul>
                    <li><a href="#" class="item-menu">Sua Conta</a></li>
                    <li><a href="#" class="item-menu">Lista de Desejos</a></li>
                    <li><a href="#" class="item-menu">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
    </header> -->
    
	
	<!--<?php print date('Y'); ?> pega o ano do sistema-->
	
    <article>
        <section>
       
            <h1 class="titulo1">A Mirror Fashion</h1>
            <p> A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
                Fundada há <?php print date("Y") - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
                participação em 118 deles.</p>

            <p>Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho</a>, no Paraná. De lá, saem 48 aviões que 
                    distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:</p>

                <figure id="centro-distribuicao">
                    <img src="img/centro-distribuicao.png">
                    <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
                </figure>

            <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja</a> ou entre em contato 
                se tiver dúvidas. Conheça também <a href="#historia">nossa história</a> e <a href="#diferenciais">nossos diferenciais</a>.</p>

        </section>

        <section>
                <h2 id="historia" class="titulo2"><em>História</em></h2>
                    <figure id="familia-pelho">
                        <img src="img/familia-pelho.jpg">
                        <figcaption>Família Pelho</figcaption>
                    </figure>

                    <p>A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
                        família <em>Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
                    revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
                    administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
                        de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.</p>

                    <p>O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
                    Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
                        de usuários diferentes, em bilhões de diferentes pedidos.</p>

                    <p>O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
                    Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
                    Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
                        nos escritórios em todo país.</p>

                <p>Dada a importância econômica da empresa para o Brasil, a família <em>Pelho</em> já recebeu diversos prêmios, 
                    homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da <strong>Mirror 
                    Fashion</strong>, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.</p>
        </section>

        <section>
            <h2 id="diferenciais" class="titulo2">Diferenciais</h2>
                <ul id="dif">
                    <li>Menor preço do varejo!</li>
                    <li>Se você achar uma loja mais barata, leva o produto de graça!</li>
                </ul>
        </section>
    </article>
	<!--
    <div id="rodape">
        <img src="img/logo.png">
        &copy; Copyright Mirror Fashion
    </div>
     -->   
   <?php include("rodape.php");?>
    
</body>
</html>