
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Itvale - Um mundo de Tecnologia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Produtos e serviÁos para a sua empresa">
        <meta name="keywords" content="serviÁos, produtos, itvale, datacenter, virtualizaÁ„o">
        <meta name="author" content="Icontrol sistemas">

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/ico.png">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
    </head>
	
	<script>
	$(document).ready(function(){
				
				
				$("#imoveis").alert('teste');
				
				

                
           
	});
	</script>
    <body>

        <!-- NAVBAR
        ================================================== -->
        <?php
        require_once 'menu.php';
        ?>

        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/negocios.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h6><span class="__hover-color">Solu√ß√µes</span> <br>empresariais e consultoria</h6>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/banner1.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h6>Desenvolvimento e implanta&#231;&#227;o de <span class="__hover-color">Projetos</span> de T.I </h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/banner2.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h6><span class="__hover-color">Produtos</span> <br>e servi&ccedil;os para a sua empresa</h6>
                            <a href="#" id="formcontatosubmit" class="btn-default btn1">Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>

        <!-- Descricao
              ================================================== -->
        <div class="container marketing container_body">
            <div class="container" id="imoveis">
                <div class="row" style="margin-top: 30px; margin-left: 45px;">
                    <div class="span2" id="div2">
                        <div class="post1">
                            <img src="img/page1_img3.png" alt="">
                            <div class="content">
                                <h3 style="font-size: 20px;"><a href="datacenter.php">DataCenter</a></h3>
                                <p>Tenha uma estrutura dedicada com toda seguran&#231;a e confiabilidade que precisa, alocando ou alugando 
                                   sua estrutura em nosso Datacenter.</p>
                            </div>

                        </div>
                    </div>

                    <div class="span2">
                        <div class="post1" id="div3">
                            <img src="img/page1_img2.png" alt="">
                            <div class="content">
                                <h3 style="font-size: 20px;"><a href="internet.php">Internet</a></h3>
                                <p>Tenha uma internet de qualidade com baixo custo para sua empresa ou residencia.</p>
                            </div>

                        </div>
                    </div>

                    <div class="span2">
                        <div class="post1">
                            <img src="img/page1_img4.png" alt="">
                            <div class="content">
                                <h3 style="font-size: 20px;"><a href="#">Solu&#231;&#245;es</a></h3>
                                <p>Conhe&#231;a nossas solu&#231;&#245;es de Ti para Datacenters como virtualiza&#231;&#227;o, backup, armazenamento e seguran&#231;a.</p>
                            </div>

                        </div>
                    </div>

                    <div class="span2">
                        <div class="post1">
                            <img src="img/page1_img5.png" alt="">
                            <div class="content">
                                <h3 style="font-size: 20px;"><a href="microinformatica.php">Microinform&aacute;tica</a></h3>
                                <p>Notebooks, Desktops, Tablets,Impressoras, suporte e mais. Tudo o que voce precisa para sua empresa ou residencia voce encontra aqui!</p>
                            </div>

                        </div>
                    </div>
                    
                    <div class="span2">
                        <div class="post1">
                            <img src="img/icon-empresa.png" alt="">
                            <div class="content">
                                <h3 style="font-size: 20px;"><a href="parceiros.php">Franquias</a></h3>
                                <p>Junte-se a n&#243;s na primeira rede de franquias de empresas de Informatica do pa&#237;s.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- solucao imagens
              ================================================== -->
        <div class="container" style="height: 359px; margin-top: 50px;">
            <div class="span5">
                <h4>Solu√ß√µes</h4>
                <div class="row">
                    <div class="span1">
                        <img class="solucao" src="img/solucao1.png">
                    </div>
                    <div class="span4">
                        <p class="solucao_p"><b>Virtualiza&ccedil;&amacr;o </b>- Infraestrutura baseada em servi&#231;os de terminais e virtualiza&#231;&#227;o para desktop, onde cada utilizador possui um sistema operativo pr&#243;prio.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="span1">
                        <img class="solucao" src="img/solucao3.png">
                    </div>
                    <div class="span4">
                        <p class="solucao_p"><b>Armazenamento </b>- Refere-se &#224; utiliza&#231;&#227;o da mem&#243;ria e das capacidades de armazenamento e c&#225;lculo de computadores e servidores compartilhados e interligados por meio da Internet.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="span1">
                        <img class="solucao" src="img/solucao2.png">
                    </div>
                    <div class="span4">
                        <p class="solucao_p"><b>Backup </b>- &#201; a c&#243;pia de dados de um dispositivo de armazenamento a outro para que possam ser restaurados em caso da perda dos dados originais.</p>
                    </div>
                </div>
            </div>
            <div class="span6">
                <h4>Franquias</h4>
                <p>Faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo. Ut pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna Donec porta diam eu massa.</p>
                <p>Faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo. Ut pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna Donec porta diam eu massa.</p>
                <p>Faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo. Ut pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna Donec porta diam eu massa.</p>
                <a href="franquias.php" id="formcontatosubmit" class="btn-default btn1">Mais</a>
            </div>
        </div>

        <!-- produto
              ================================================== -->
        <div class="container container-produto" style="border-bottom: 3px solid #056736;">
            <div class="container">
                <div class="span4" style="background: rgba(0, 0, 0, 0.5);margin-top: 18px;">
                    <h4 style="color: #ffffff;margin: 0px 15px 0px 15px;">Produtos</h4>
                    <p class="descicao_par">Os produtos que a sua empresa precisa para aumentar a produtividade</p>
                    <p class="descicao_par">Faucibus orci luctus et trices posuere cubilia Suspendisse sollicit udin velit sed leo. </p>
                    <p style="background: rgba(0, 0, 0, 0.5);"><a href="microinformatica.php" id="formcontatosubmit" class="btn-default btn1" style="margin: 15px 15px 15px 15px;">Mais</a></p>
                </div>
                <div class="span8">

                </div>
            </div>
        </div>

        <!-- rodapÔøΩ
            ================================================== -->
        <div class="container">
            <footer>
                <div class="row">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fitvaleinfo&amp;width=1170&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:258px;" allowTransparency="true"></iframe>
                </div>
                <div class="row">
                    <div class="span5">

                    </div>
                    <div class="span6" style="text-align: right;">
                        <a class="logotipo" href="http://www.icontrolsistemas.com.br/" target="blank" style="margin-right: 5px;"><img src="img/logo_icontrol.jpg"/></a>
                        <img src="img/itvale.jpg" width="120"/>
                        <p style="color: #5f5f5f; font: 400 15px/43px 'Oswald', sans-serif;">&copy; Itvale <?php echo date('Y') ?> | Todos os direitos reservados.</p>
                    </div>
                </div>

            </footer>
        </div>

    </body>
    <script>
        $('.carousel').carousel();
    </script>
</html>
