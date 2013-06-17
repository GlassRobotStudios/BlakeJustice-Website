<?php
    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

    $isiOSDevice = true;

    if( !($iPod || $iPhone || $iPad) ){
        $isiOSDevice = false;
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

        <?php
        if ($isiOSDevice) {
            echo "<script src=\"scripts/openapp.js\"></script>";
        }
        ?>

    </head>
    <body >

    </body>
</html>
