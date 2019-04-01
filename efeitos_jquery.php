<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - Efeitos Jquery</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - Efeitos Jquery</h1>
        <button id="btnAparecer">Aparecer</button>
        <button id="btnSumir">Sumir</button>
        <button id="btnAlternar">Alternar</button>
        <hr>
        <div id="div01"></div>
        <div id="div02"></div>
        <div id="div03"></div>
        
        <div style="clear: both;"></div>
        <hr>
        
        <script>
            $("#btnAparecer").click(function (){
                $("#div01").fadeIn();
                $("#div02").fadeIn("slow");
                $("#div03").fadeIn(4000);
            });
            $("#btnSumir").click(function (){
                $("#div03").fadeOut();
                $("#div02").fadeOut("slow");
                $("#div01").fadeOut(4000);
            });
            $("#btnAlternar").click(function (){
                $("#div01").fadeToggle();
                $("#div02").fadeToggle("slow");
                $("#div03").fadeToggle(4000);
            });
            
        
        </script>
        <div id="flip">Clique aqui para mostrar</div>
        <div id="painel">Olá Chuchuzinhos!</div>
        <div id="btnPainelUp">Voltar</div>
        <style>
            #painel, #flip{
                background-color: #eec;
                text-align: center;
                border: solid 1px black;
                padding: 10px;
                width: 300px;
            }
            #painel{
                padding: 50px;
                display: none;
            }
            
            #div01, #div02, #div03{
                width: 50px; height: 50px;
                background-color: red;
                margin: 10px;
                float: left;
            }
        </style>
        <script>
            $("#flip").click(function (){
           //$("#painel").slideDown(3000);
            $("#painel").slideToggle(2000);
            });
            $("#btnPainelUp").click(function (){
                $("#painel").slideUp(2000);
            });
        </script>
    </body>
</html>
