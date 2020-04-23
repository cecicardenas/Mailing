<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Succulents & cacti</title>
        
        <link rel="stylesheet" href="css/1140.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    controlsContainer: '.flex-container'
                });
            });
        </script>

    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div class="container">
            <header class="row">
                <hgroup class="twelvecol center">
                    <h1>SUCACTUS</h1>
                    <h2>Checa nuestras promosiones</h2>
                </hgroup>
            </header>

            <div id="main" class="row">

                <div class="onecol"></div> 

                <div id="slider" class="tencol">

                    <div class="flex-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="images/img3.jpg"/></li>
                                <li><img src="images/img4.jpg"/></li>
                                <li><img src="images/img5.jpg"/></li>
                                <li><img src="images/img6.jpg"/></li>
                            </ul><!-- .slides -->
                        </div><!-- .flexslider -->
                    </div><!-- .flex-container -->

                </div>

                <div class="onecol last"></div>



            </div>
            <footer class="row">
                <div class="twelvecol center">
                    <p>En SUCACTUS nos dedicamos a la venta de suculentas y cactus: <a href="http://www.sucactus.com">sucactus.com</a></p>
                    <p><a href="http://www.sucactus.com/contacto">Contactanos</a></p>				
                    <p>Todos los derechos reservados &copy; 2020.<a href="http://www.sucactus.com/avisodeprivacisas">Aviso de Privacidad</a></p>
                </div>
            </footer>
        </div> <!--! end of #container -->
        
    </body>
</html>
