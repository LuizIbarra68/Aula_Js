<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - Animacoes</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - Animacoes</h1>
        <button id="btnAnimar">Iniciar</button>
        <button id="btnTroca">Troca</button>
        <div id="div01"></div>
        <script>
            $("#btnTroca").click(function (){
            $("#div01").animate({
            height: 'toggle'
            });
            });
            $("#btnAnimar").click(function (){
            $("#div01").animate({
            left: "+=50px",
                    top: "+=50px"
            });
            });
        </script>
        <style>
            #div01{
                top: 200px;
                width: 100px;
                height: 50px;
                background-color: #ccc;
                position: absolute;
                margin-top: 15px;
            }
            #div02{
                width: 100px; height: 100px;
                background-color: red;
                margin-top: 10px;
            }
        </style>
        <hr style="margin-top: 100px;"> 
        <button id="btnVarias">Várias</button>
        <div id="div02"></div>
        <script>
            var divi = $("#div02");
            $("#btnVarias").click(function (){
                divi.animate({width: "200px", opacity: "0.6"}, 1000);
           
                divi.animate({height: "200px", opacity: "0.4"}, 2000);
                
            
                divi.animate({width: "100px", opacity: "0.6"}, 3000);

                divi.animate({ height: "100px", opacity: "1.0"}, 4000);
                
            });
        </script>

    </body>
</html>
