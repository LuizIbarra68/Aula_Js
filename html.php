<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula JavaScript -  JQUERY HTML</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        <h1>Aula de JavaScript - JQUERY HTML</h1>
        <input type="text" id="txt" placeholder="Nome: " />
        <button id="btnNomePadrao">Preencher</button>
        <button id="btnSalvarText">Salvar (text)</button>
        <button id="btnSalvarHtml">Salvar (html)</button>
        <button id="btnLimpar">Limpar</button>
        <button id="btnExcluir">Excluir Tela</button>
        <button id="btnH1">Pegar H1</button>
        
        <div id="tela"></div>
        <style>
            #tela{
                width: 200px; height: 100px;
                border: solid 1px black;
            }
        </style>
        
        <script>
            $("#btnNomePadrao").click( function (){
                $("#txt").val("Luiz Ibarra");
            });
            $("#btnSalvarText").click( function (){
                $("#tela").text( $("#txt").val());
            });
            $("#btnSalvarHtml").click( function (){
                $("#tela").html( $("#txt").val());
            });
            $("#btnLimpar").click( function (){
                $("#tela").empty();
            });
            $("#btnExcluir").click( function (){
                $("#tela").remove();
            });
            $("#btnH1").click( function (){
                $("#tela").pegar();
            });
            
        </script>
        
    </body>
</html>
