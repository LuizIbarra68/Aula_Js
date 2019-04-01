<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript - JQUERY Seletores</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>JQUERY Seletores</h1>
        <p>Oi chuchuzinhos</p>
        <p id="p2">Tudo bem</p>
        <button id="btnEsconder">Esconder Parágrafo</button>
        <button id="btnEsconderP2">Esconder Parágrafo 2</button>
        <br>
        <div class="div01">Hoje tem prova</div>
        <button id="btnEsconderDiv">Esconder div</button>
        <br>
        <button id="btnMostrar">Mostrar Tudo</button>
        
        <script>
            $("#btnEsconder").click( function (){
               $("p").hide(); 
            });
            $("#btnEsconderP2").click( function (){
               $("#p2").hide(); 
            });
            $("#btnEsconderDiv").click( function (){
               $(".div01").hide(); 
            });
            $("#btnMostrar").click( function (){
               $("p").show(); 
               $(".div01").show(); 
               
            });
        </script>
        <br>
        <br>
        <h1 id="eventos">.:Eventos:.</h1>
        Nome:
        <input type="text" id="txt" /> <label id="cont"></label>
        
        <button id="btn"></button>
        <div id="lista" style="width: 200px; height: 100px;
                border: solid 1px black;"></div>
        <hr>
        <div id="div02" >Conteúdo da div02</div>
        <style>
            #div02{
                width: 200px; height: 100px;
                border: solid 1px black;
            }
        </style>
        
        <script>
            $("#eventos").dblclick(function (){
                alert("Duplo clique no eventos");
            });
            $("#eventos").hover(function (){
                $("#eventos").css("background-color", "#ddd");
            });
            $("#txt").focus(function (){
                $("#txt").css("background-color", "#ddd");
            });
            $("#txt").focus(function (){
                $("#txt").css("background-color", "#fff");
            });
            // $("#txt").val("Luiz");
            $("#btn").html("<b>Salvar</b>");
            
            $("#txt").keyup(function (){
                tam = ($("#txt").val().length);
                 $("#cont").text(tam);
            });
            $("#div02").prepend("prepend<br>");
            $("#div02").append("<br>append");
            $("#div02").after("after");
            $("#div02").before("before");
            
            $("#btn").click(function (){
               $("#lista").append( $("#txt").val() + "<br>"); 
               $("#txt").val("");
               $("#txt").focus();
            });
        </script>
    </body>
</html>
