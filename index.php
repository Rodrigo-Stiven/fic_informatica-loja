<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="pt" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt">
<!--<![endif]-->

<!-- Begin Head -->
<head>
<meta charset="utf-8" />
<title>FIC_INFORMÁTICA</title>
<script src="jquery-3.5.1.min.js"></script>
<script src="scripts.js"></script>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="author"  content="Equipe FIC_INFORMÁTICA IFPA"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
<header id="ed_header_wrapper">
	<div class="ed_header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="educo_logo"> <a href="index.html"><img src="images/header/Logo.png" alt="logo" /></a> </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="edoco_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
					</div>
					<div class="edoco_menu">
						<ul class="collapse navbar-collapse" id="ed_menu">
					        <li><a href="index.php?p=cc">Cadastrar cliente</a></li>
					        <li><a href="index.php?p=vc">Ver clientes</a></li>
					        <li><a href="index.php?p=cf">Cadastrar funcionário</a></li>
					        <li><a href="index.php?p=vf">Ver funcionários</a></li>
					        <li><a href="index.php?p=ca">Cadastrar produto</a></li>
					        <li><a href="index.php?p=va">Tabela de produtos</a></li>
					        <li><a href="index.php?p=rv">Realizar venda</a></li>
					        <li><a href="index.php?p=vv">Ver vendas</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
</header>
<!--header end -->

<!--section start -->

<div class="ed_graysection ed_toppadder90 ed_bottompadder90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="conteudo" class="skill_section">
			<?php

                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    echo "<h2><center>Olá sejam Bem-vindos a nossa Petshop</center></h2>";
                    $pagina = null;
                }
                if($pagina == 'cc'){
                    include "cliente_form.html";
                }elseif($pagina == 'vc'){
                    include "cliente_ver.php";
                }elseif($pagina == 'cf'){
                    include "funcionario_form.html";
                }elseif($pagina == 'vf'){
                    include "funcionario_ver.php";
                }elseif($pagina == 'ca'){
                    include "produto_form.html";
                }elseif($pagina == 'va'){
                    include "produto_ver.php";
                }elseif($pagina == 'rv'){
                    include "venda_form.php";
                }elseif($pagina == 'vv'){
                    include "venda_ver.php";
                }

            ?>
				</div>
			</div>
        </div>
	</div>
</div>
<!-- section end -->



<!--Footer Top section start-->
<div class="ed_footer_wrapper">
	<div class="ed_footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Equipe 1ª Etapa</h4>
						<span style="color: white;">
						<i class="fa fa-user"></i> Évila Moreira <br>
						<i class="fa fa-user"></i> Jordana <br>
						<i class="fa fa-user"></i> Marco Madson <br>
						</span>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Equipe 2ª Etapa</h4>
						<span style="color: white;">
						<i class="fa fa-user"></i> Wendel <br>
						<i class="fa fa-user"></i> Jônatas <br>
						<i class="fa fa-user"></i> Luis Andrés <br>
						<i class="fa fa-user"></i> Stiven <br>
						</span>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Equipe 3ª Etapa</h4>
						<span style="color: white;">
						<i class="fa fa-user"></i> Wendel <br>
						<i class="fa fa-user"></i> Carlos <br>
						<i class="fa fa-user"></i> Madson <br>
						<i class="fa fa-user"></i> Joisilene <br>
						</span>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Footer Top section end-->
<!--Footer Bottom section start-->
<div class="ed_footer_bottom">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="ed_copy_right">
					<p>&copy; Copyright 2020 <a href="#">FIC_INFORMÁTICA IFPA TURMA 2020</a></p>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!--Footer Bottom section end-->


<!--main js file start--> 
<script type="text/javascript" src="js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.stellar.js"></script> 
<script type="text/javascript" src="js/smooth-scroll.js"></script> 
<script type="text/javascript" src="js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 

<!--main js file end-->
</body>
</html>