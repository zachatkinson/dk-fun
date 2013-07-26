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
        <meta name="DK-Fun" content="Dk-fun, http://zatk.ca" charset="utf-8" />
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="./css/dkfun.css" rel="stylesheet" type="text/css" />
    </head>
    <body onload="init()">
        <div id="wrap">
            <canvas width="480" height="320" id="gameScreen">
                <!--if browser does not support canvas -->
                <p>Sorry, it seems your browser is outdated. This website uses cutting edge web technologies, try <a href="http://www.getfirefox.com">Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a> to see what we have up our sleeves!</p>
            </canvas>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" language="javascript"></script>
        <script src="./js/bootstrap.js" type="text/javascript" language="javascript"></script>
    <script src="./js/dkfun.js" type="text/javascript" language="javascript"></script>
    </body>
</html>
