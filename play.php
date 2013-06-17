<?php
    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

    if( !($iPod || $iPhone || $iPad) )
    {
        header("Location: http://blakejustice.co/download");
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Play</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <script type="text/javascript">

        function startApp(){
            var level = getUrlVars()['level'];

            if (typeof level === 'undefined') {
                document.location = 'download.php';
            }
            else {
                setTimeout(function(){
                    if(confirm('You do not seem to have Blake Justice installed, do you want to go download it now?')){
                        document.location = 'download.php';
                    }
                }, 300);

                document.location = 'blakejustice://level='+level;
            }
        }

        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                vars[key] = value;
            });
            return vars;
        }


        </script>

    </head>
    <body onload='startApp()'>
        <p>Loading...</p>
    </body>
</html>
