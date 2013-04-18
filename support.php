<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Support</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/main.css">
        <script src="scripts/vendor/modernizr.min.js"></script>
        <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
        <script type="text/javascript">
            function showRecaptcha(element) 
            {
                Recaptcha.create("6LcP7N8SAAAAAJbHrhGweRdC-ww8zGtCzNA13NIj", element, {
                    theme: "red",
                    callback: Recaptcha.focus_response_field});
            }
        </script>
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
                        <a href="support.php" id="gr-navbar-font-active">SUPPORT</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Body -->
        <div class="container">
            <div class="container-fluid">
                <h1 class="gr-header">SUPPORT</h1>

                <?php if ($_GET["check"] == "true") { ?>
                    <p class="gr-para">
                        Your message was sent successfully. We'll try get back to you within the next 3 days.
                    </p>
                <?php } elseif ($_GET["check"] == "false") { ?>
                    <p class="gr-para">
                        We are sorry, but there was a problem sending your message.<br>
                        <?php 
                            if ($_GET["error"] == 1) 
                            {
                                echo "There was a problem with the SMTP server.<br>";
                            }
                            if ($_GET["error"] == 2) 
                            {
                                echo "There was a problem with the mail server.<br>";
                            }
                         ?>
                        Please <a href="support">try</a> again.
                    </p>
                <?php } else { ?>
                    <p class="gr-para">
                        Any feedback, comments or bugs you may come accross, please let us know below.
                    </p>

                    <form class="form-horizontal" name="support" onsubmit="return exeCheck()">

                        <div class="control-group">
                            <label class="control-label gr-para" for="inputName">Your Name *</label>
                            <div class="controls">
                                <div class="span3" style="margin-left: 0px; margin-right: 20px;">
                                    <input type="text" id="inputName" placeholder="Name">
                                </div>
                                
                                <div class="span3" style="margin-left: 0px; margin-right: 20px;">
                                    <div class="alert alert-error fade-in" id="nameAlert" style="display:none;">
                                        Enter your name
                                    </div>
                                </div>    
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label gr-para" for="inputEmail">Your Email *</label>
                            <div class="controls">
                                <div class="span3" style="margin-left: 0px; margin-right: 20px;">
                                    <input type="text" id="inputEmail" placeholder="Email">
                                </div>
                                
                                <div class="span3" style="margin-left: 0px; margin-right: 20px;">
                                    <div class="alert alert-error fade-in" id="emailAlert" style="display:none;">
                                        Not a valid e-mail address
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label gr-para" for="inputMessage">Your Message</label>
                            <div class="controls">
                                <!-- <textarea rows="6"></textarea> -->
                                <textarea class="field span6" id="inputMessage" rows="9" placeholder="Tell us what happened"></textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary gr-para">Send</button>
                                <!-- <button href="#recaptchaModal" type="submit" class="btn btn-primary gr-para" data-toggle="modal">Send</button> -->
                                <!-- <input type="submit" value="Submit"> -->
                            </div>
                        </div>

                    </form>
                <?php } ?>
            </div>
        </div>

        <?php include "footer.php"; ?>

        <!-- recaptchaModal -->
        <div class="modal hide fade" id="recaptchaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel" class="gr-header-invert">Type in the reCAPTCHA</h3>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" name="modal-support" action="check" method="POST">
                    <input type="hidden" name="modal-inputName">
                    <input type="hidden" name="modal-inputEmail">
                    <input type="hidden" name="modal-inputMessage">
                    <input type="hidden" name="modal-recaptcha_challenge_field" value="adamD2">
                    <input type="hidden" name="modal-recaptcha_response_field" value="adamD3">

                    <div class="control-group" align="center" id="recaptcha_div">
                    </div>

                    <div class="alert alert-error fade-in" id="captchaStatus" style="display:none; margin-left: 120px; margin-right: 120px;">
                        Incorrect captcha. Please try again
                    </div>

    
                    <div class="control-group" align="center">
                        <div class="controls" style="margin-left:0px;">
                            <button type="submit" class="btn btn-primary gr-para" id="checkButton" data-loading-text="Sending...">Done</button>
                        </div>
                    </div>
                </form>
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
    <!-- endbuild -->

    <script type="text/javascript">
        function validateForm () 
        {
            var name=document.forms["support"]["inputName"].value;
            var email=document.forms["support"]["inputEmail"].value;

            var atpos=email.indexOf("@");
            var dotpos=email.lastIndexOf(".");

            var error = false;

            if (name==null || name=="")
            {
                $("#nameAlert").show();
                error = true;
            }
            else
            {
                $("#nameAlert").hide();
            }

            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) 
            {
                $("#emailAlert").show();
                error = true;
            }
            else
            {
                $("#emailAlert").hide();
            }
            return !error;
        }

        function exeCheck () 
        {
            if (validateForm()) 
            {
                $(document).ready(function()
                {
                    $('#recaptchaModal').modal('show');
                    showRecaptcha('recaptcha_div');
                })
            };
            return false;
        }

        $(function(){
            function validateCaptcha()
            {
                challengeField = $("input#recaptcha_challenge_field").val();
                responseField = $("input#recaptcha_response_field").val();

                document.forms["modal-support"]["modal-inputName"].value = document.forms["support"]["inputName"].value;
                document.forms["modal-support"]["modal-inputEmail"].value = document.forms["support"]["inputEmail"].value;
                document.forms["modal-support"]["modal-inputMessage"].value = document.forms["support"]["inputMessage"].value;
                document.forms["modal-support"]["modal-recaptcha_challenge_field"].value = challengeField;
                document.forms["modal-support"]["modal-recaptcha_response_field"].value = responseField;

                var html = $.ajax({
                    type: "POST",
                    url : "ajax.verifyrecaptcha",
                    data: "recaptcha_challenge_field=" + challengeField + "&recaptcha_response_field=" + responseField,
                    async: false
                }).responseText;

                if (html == "true")
                {
                    $("#captchaStatus").hide();
                    return true;
                }
                else
                {
                    $("#captchaStatus").show();
                    $('#checkButton').button('reset');
                    Recaptcha.reload();
                    return false;
                }
            }

            //Modified as per comments in site to handle event unobtrusively
            $("#checkButton").click(function(){
                var btn = $(this);
                btn.button('loading');
                setTimeout(function () {btn.button('reset')}, 12000);
                return validateCaptcha();
            });
        });
    </script>
</body>
</html>
