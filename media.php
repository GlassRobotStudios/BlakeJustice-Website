<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Media</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/bootstrap-lightbox.css">
        <script src="scripts/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="media.php" id="gr-navbar-font-active">MEDIA</a>
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
                <h1 class="gr-header">SCREENSHOTS</h1>
            </div>

            <div class="container-fluid">
                <?php
                    $count = 0;
                    echo "<table class=\"table table-bordered\">";
                    for ($i=0; $i < 3; $i++) { 
                        echo "<tr>";
                        for ($j=0; $j < 4; $j++) { 
                            echo "<td><a data-toggle=\"lightbox\" href=\"#screenshotLightbox\" data-id=\"sh$count.png\" class=\"open-screenshotLightBox\"><img src=\"images/screenshots/sh$count-small.png\"></a></td>";
                            $count++;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </div>

            <div class="container-fluid">
                <h1 class="gr-header">VIDEO</h1>
            </div>

            <div class="container-fluid" align="center">
                <iframe style="margin-bottom:60px;" width="860" height="515" src="http://www.youtube.com/embed/dNjDXFwM-VE" frameborder="1" allowfullscreen></iframe>
            </div>

            <!-- Footer -->
            <div class="container-fluid">
                <!-- <hr style="margin-top: 50px;"> -->
                <footer>
                    <p class="gr-font">© <a class="gr-font" href="http://www.glassrobotstudios.com" target="_blank"> Glass Robot Studios</a> 2013</p>
                </footer>
            </div>
        </div>

        <!-- Lightbox -->
        <div id="screenshotLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class='lightbox-header'>
                <button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
            </div>
            <div class='lightbox-content' id="lightbox-body">
                <img name="screenshotImage" id="screenshotImage">
                <!-- <img name="screenshotImage" id="screenshotImage" src="images/screenshots/sh0.jpg"> -->
                <!-- <div class="lightbox-caption"><p>Your caption here</p></div> -->
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

    <script src="scripts/lightbox/bootstrap-lightbox.js"></script>

    <script type="text/javascript">
        $(document).on("click", ".open-screenshotLightBox", function (){ 
            document.getElementById("screenshotImage").src = ("images/screenshots/" + ($(this).data('id')));
        });
    </script>
    <!-- endbuild -->
</body>
</html>
