<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/main.css">
        <script src="scripts/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="media.php" id="gr-navbar-font">MEDIA</a>
                    </li>
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="download.php" id="gr-navbar-font">DOWNLOAD</a>
                    </li>
                    <li>
                        <a href="/"><img src="images/logo.png"></a>
                    </li>
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="about.php" id="gr-navbar-font">ABOUT</a>
                    </li>
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="support.php" id="gr-navbar-font">SUPPORT</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Body -->
        <div class="container">
            <div class="container-fluid">
                <img src="images/carousel-border-top.png" alt="Dr. Desmond Destroy" id="gr-carousel-border-horz">
            </div>

            <div class="container-fluid" style="margin-bottom:0px;">

                <div class="span1" id="gr-carousel-border-vert">
                    <img src="images/carousel-border-left.png" alt="Wall Slide">
                </div>
                
                <div class="span10" style="margin-left: 0px; margin-bottom:0px;">
                    <div id="myCarousel" class="carousel slide" style="margin-bottom:0px;">
                        <div class="carousel-inner">
                            <?php
                                $here = realpath(__dir__);
                                $path = "$here/images/carousel";

                                $count = 0;
                                while (file_exists("$path/sh$count.jpg")) {
                                    $count++;
                                }
                                $count--;

                                if ($count != -1) 
                                {
                                    echo "<div class=\"active item\">";
                                    echo "<img src=\"images/carousel/sh0.jpg\">";
                                    echo "</div>";

                                    for ($i=1; $i <= $count; $i++) { 
                                        echo "<div class=\"item\">";
                                        echo "<img src=\"images/carousel/sh$i.jpg\">";
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev" style="top: 50%;">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next" style="top: 50%;">&rsaquo;</a>
                    </div>                    
                </div>
                
                <div class="span1" id="gr-carousel-border-vert">
                    <img src="images/carousel-border-right.png" alt="Crawler">
                </div>

            </div>

            <div class="container-fluid">
                <img src="images/carousel-border-bottom.png" alt="Spinning Saws" id="gr-carousel-border-horz">
            </div>


            <!-- Footer -->
            <div class="container-fluid gr-footer">
                <!-- <hr style="margin-top: 50px;"> -->
                <footer>
                    <p class="gr-font">© <a class="gr-font" href="http://www.glassrobotstudios.com" target="_blank"> Glass Robot Studios</a> 2013</p>
                </footer>
            </div>
        </div>



        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="scripts/vendor/jquery.min.js"><\/script>')</script>
        
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    
    <!-- build:js scripts/plugins.js -->
    <script src="scripts/vendor/bootstrap/bootstrap-affix.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-alert.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-dropdown.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-tooltip.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-modal.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-transition.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-button.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-popover.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-typeahead.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-carousel.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-collapse.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-tab.js"></script>

    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 3000
        })
    </script>
    <!-- endbuild -->
</body>
</html>
