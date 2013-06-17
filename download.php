<?php
    $URL     = "https://itunes.apple.com/us/app/blake-justice-project-hero/id632308261?ls=1&mt=8";

    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

    if( $iPod || $iPhone || $iPad )
    {
        header("Location: $URL");
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Download</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/main.css">
        <script src="scripts/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        <!-- Header -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="media.php" id="gr-navbar-font">MEDIA</a>
                    </li>
                    <li class="gr-navbar-buttons-y-pos">
                        <a href="download.php" id="gr-navbar-font-active">DOWNLOAD</a>
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
                <div align="center" style="margin-bottom: 60px; margin-top: 60px;">
                    <a <?php echo "href=\"$URL\""; ?> target="_blank"><img src="images/download-button.png"></a>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="scripts/vendor/jquery.min.js"><\/script>')</script>
    
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
    <!-- endbuild -->
</body>
</html>
