
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Itvale - Um mundo de Tecnologia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Produtos e servi&ccedil;os para a sua empresa">
        <meta name="keywords" content="servi&ccedil;os, produtos, itvale, datacenter, virtualiza&ccedil;&amacr;o">
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
    <body>

        <!-- NAVBAR
        ================================================== -->
        <?php
        require_once 'menu.php';
        ?>


        <!-- virtualizacao
                    ================================================== -->
        <div class="container marketing container_body" style="margin-top: 150px; background-color: #056538;">
            <div class="container">
                <div class="row">
                    <div class="span5" style="margin-bottom: 20px; margin-top: 20px;">
                        <img style="border: 1px solid #FFFFFF;" width="400" src="img/datacenter.jpg">
                    </div>
                    <div class="span6">
                        <h1 style="color: #FFFFFF;"><i class="icon-center"></i> DataCenter</h1>
                        <p class="descricaoservico">O Data Center é um ambiente projetado para abrigar servidores e outros componentes como sistemas de armazenamento de dados (storages).</p>
                        <p class="descricaoservico">O objetivo principal de um Data Center é garantir a disponibilidade de equipamentos que rodam sistemas cruciais para o negócio de uma organização, tal como o ERP ou CRM, garantindo assim a continuidade do negócio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing container_body" style="background-color: #06552F;">
            <div class="container">
                <div class="row">
                    <div class="span5" style="margin-bottom: 20px; margin-top: 20px;">
                    </div>
                    <div class="span6">
                        <h1 style="color: #FFFFFF;"><i class="icon-infra"></i> Infraestrutura</h1>
                        <p class="descricaoservico">Para manter as informa&#231;&#245;es centralizadas, sempre dispon&#237;veis e seguras a Itvale proporciona uma infraestrutura altamente segura e eficiente.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="span5" style="border-right: 5px solid #06552F;">
                    <div class="span1" style="background-color: #06552F; border-radius: 50%"><img src="img/icon1.png"></div>
                    <div class="span3">
                        <h4>Objetivos</h4>
                        <p>Disponibilidade de equipamentos, tais como ERP ou CRM</p>
                    </div>
                </div>
                <div class="span5" style="border-right: 5px solid #06552F;">
                    <div class="span1" style="background-color: #06552F; border-radius: 50%"><img src="img/icon3.png"></div>
                    <div class="span3">
                        <h4>Suporte</h4>
                        <p>Suporte dedicado e personalizado de especialistas em hardware, software e servi&#231;os.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-virtualizacao" style="border-bottom: 3px solid #056736; height: 444px;">
            <div class="container">
                <div class="span10" style="background: rgba(0, 0, 0, 0.5);margin-top: 18px;">
                    <h4 style="color: #ffffff;margin: 0px 15px 0px 15px;">Conceito</h4>
                    <p class="descicao_par">Data Center, ou Centro de Processamento de Dados, &#233; um ambiente projetado para concentrar servidores, equipamentos de processamento e armazenamento de dados, e sistemas de ativos de rede, como switches, roteadores, e outros.</p>
                    <p style="background: rgba(0, 0, 0, 0.5);"><a href="#" id="formcontatosubmit" class="btn-default btn1" style="margin: 15px 15px 15px 15px;">Mais</a></p>
                </div>
            </div>
        </div>


        <!-- rodape
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
</html>
