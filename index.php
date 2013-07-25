<?php
/*
 *
 * Date: 2013-07-25
 * Author: Zach Atkinson
 * Project: dk-fun
 * File: index.php
 * © Zach Atkinson 2013. All Rights Reserved
 *
 */
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>DK-Fun</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <canvas width="500" height="500" id="gameScreen">
            <!--if browser does not support canvas -->
            <p>Sorry, it seems your browser is outdated. This website uses cutting edge web technologies, try <a href="http://www.getfirefox.com">Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a> to see what we have up our sleeves!</p>
        </canvas>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" ></script>
        <script src="./js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var canvas = document.getElementById("gameScreen");
            var ctx = canvas.getContext("2d");
            ctx.fillStyle = "rgb(0, 0, 255)";
            ctx.save();
            ctx.fillRect(50, 50, 100, 100);
            ctx.fillStyle = "rgb(255, 0, 0)";
            ctx.fillRect(200, 50, 100, 100);


        });
    </script>
    </body>
</html>
