
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
            require_once 'admin/model/db.php';
        ?>


        <!-- virtualizacao
                    ================================================== -->
        <div class="container marketing container_body" style="margin-top: 150px; background-color: #056538;">
            <div class="container">
                <div class="row">
                    <div class="span5" style="margin-bottom: 20px; margin-top: 20px;">
                        <img style="border: 1px solid #FFFFFF;" width="400" src="img/microinformatica.jpg">
                    </div>
                    <div class="span6">
                        <h1 style="color: #FFFFFF;"><i class="icon-micro"></i> Microinform&aacute;tica</h1>
                        <p class="descricaoservico">Possuímos uma equipe capacitada para atender toda a demanda da área de microinformática, formatação, backup, vendas de equipamentos em geral.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing container_body" style="background-color: #06552F;">
            <div class="container">
                <div class="row">
                    <div class="span5" style="margin-bottom: 20px; margin-top: 20px;">

                    </div>

                </div>
            </div>
        </div>

        <!-- produtos
            ================================================== -->
        
        <?php

            $sql = "select *
                    from microinformatica
                    order by ordem";

            $oDB = new DB();
            $rs = $oDB->sqlFetchAll($sql);
            

            $countCol = 0;
            if(count($rs)>0){
                foreach ($rs as $d){

                    /* Iniciando a linha */
                    if($countCol == 0){
                        echo '<div class="container"><div class="row"><div class="col-md-12">';
                    }

                    echo '<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <h4 class="text-center"><span class="label label-info">'.$d['titulo'].'</span></h4>
                                <div style="height:350px;"><img src="img/microinformatica/'.$d['fotodir'].'" class="img-responsive"></div>
                                <div class="caption">
                                    <div class="row-produto">
                                        <div class="col-md-6 col-xs-6">
                                            <h3 class="text-produto">'.$d['descricao'].'</h3>
                                        </div>
                                        <div class="col-md-6 col-xs-6 price">
                                            <h3 style="text-align: right;">
                                                <label class="text-produto">R$ '.number_format($d['preco'],2,',','.').'</label>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row row-produto">
                                        <p style="float: left;">'.$d['detalhes'].'</p>
                                    </div>
                                    <p> </p>
                                </div>
                            </div>
                        </div>';

                    $countCol++;
                    /* Terminando a linha */
                    if($countCol == 3){
                        echo '</div></div></div>';
                        $countCol = 0;
                    }

                }
            }

        ?>

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
