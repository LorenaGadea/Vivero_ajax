<?php
session_name('vivero');
session_start();
if (isset($_SESSION)) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Plantarum</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mainStyle.css">
        <link rel="icon" type="image/png" href="img/icon.png" sizes="16x16">
        <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            body {
                background-image: url("./img/fondo.jpg");
            }
        </style>
    </head>

    <body>
            <div>ALQUILERES DE TU PUTA MADRE</div>
            <div id="lista"></div>
    <?php } ?>
    </body>

    </html>