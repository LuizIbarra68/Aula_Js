<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - JQUERY CSS</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - JQUERY CSS</h1>
        <button id="btnGetCSS">Pegar CSS</button>
        <button id="btnSetCSS">Setar CSS</button>
        <div id="tela"></div>
        <script>
            $("#btnSetCSS").click( function (){
                $("#btnSetCSS").css("color", "red");
                $("#btnSetCSS").css("background-color", "yellow");
                $("#btnGetCSS").css("color", "#f00");
            });
            $("#btnGetCSS").click( function (){
                $("#tela").html("Cor do botão Get: " +
                         $("#btnSetCSS").css("color") + "<br>" +
                         "bacground do botão Get: " + 
                         $("#btnSetCSS").css("background-color") +
                         "<br>Cor do botão Set: " +
                         $("#btnGetCSS").css("color") +
                         "<br>Borda do botão get: " +
                         $("#btnSetCSS").css("border") +
                         "<br>Borda da tela: " +
                         $("#tela").css("border"));
                
            });
        </script>
        <style>
            #tela{
                width: 300px; height: 300px;
                border: solid 1px black;
            }
        </style>
        
    </body>
</html>
