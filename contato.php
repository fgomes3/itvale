
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
        <!-- contato
                    ================================================== -->
        <div class="container" style="margin-top: 150px;">
            <div class="row" style="text-align: center;">
                <div class="container" style="height: 200px;background-color: #066337;">
                    <h1 class="contatoh1">Contate - nos</h1>
                </div>
            </div>
            <div class="row" style="border-bottom: 3px solid #066337;">
                <div class="container" style="margin-bottom: 45px;">
                    <div class="span4">
                        <legend class="legendcontato">&nbsp;Contatar</legend>
                        <input type="text" id="nome" name="nome" placeholder="Nome:">
                        <input type="text" id="email" name="email" placeholder="E-mail:">
                        <input type="text" id="telefone" name="telefone" placeholder="Telefone:">
                        <textarea id="mensagem" name="mensagem" placeholder="Mensagem:" style="width: 100%;height: 135px;margin-bottom: 6px;"></textarea>
                        <a href="#" id="formcontatosubmit" class="btn-default btn1">Enviar</a>
                    </div>
                    <div class="span4">

                        <legend class="legendcontato">&nbsp;Contato</legend>
                        <address>
                            <strong><i class="icon-map-marker"></i> Endereço</strong><br>
                            Rua 25 de Dezembro, 1123<br>
                            CEP 85950-000<br>
                            Palotina - PR<br><br>
                            <abbr title="Phone">
                                <strong><i class=" icon-volume-up"></i> Telefone:</strong></abbr><br>
                            (44) 3649-5600 <br>
                        </address>
                        <address>
                            <strong><i class="icon-envelope"></i> E-mail:</strong><br>
                            <a href="mailto:#">contato@itvale.com.br</a>
                        </address>

                    </div>
                    <div class="span3">
                        <!--<legend class="legendcontato">&nbsp;Contato</legend>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1818.4377360371716!2d-53.836460999999986!3d-24.281079699999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f36e6513f8521d%3A0x2421032f9952014b!2sR.+25+de+Dezembro%2C+1123+-+Centro%2C+Palotina+-+PR%2C+85950-000!5e0!3m2!1spt-BR!2sbr!4v1420734352087" width="120%" height="400" frameborder="0" style="border:0;margin-top: 45px;"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <!-- rodapé
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
