<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $pagina="pagina.php"; //aqui colocariamos o nome da pagina.
    if(basename($_SERVER["PHP_SELF"])=='$pagina'){
    die("<script>alert('Sem permição de acesso !')</script>\n<script>window.location=('index.php')</script>");
}
?>
<html>
    <head>
        <title>Certificado DJE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js"></script>
        
        <style media="print">
            .imprime {
            display: none;
        }
        </style>
        <style>
            #naoimprime 
            {
                display: none;
            }
            #imprime
            {
                display:block;
            }
            
            .bg { 
                    background-image:	URL('017.png');
                    background-repeat:	no-repeat;
                    max-width:200px;
                    max-height:150px;
                    width: auto;
                    height: auto;
            }
            
            .nome {
                position: absolute;
                width: 620px; 
                height: 50px;
                top: 36%;
                left:20%;
                text-height: 50px;
                background-color: #DD127A;
                border: 0;
            }
            input::placeholder {
                 color: #afffe8;
            }
            input, select, textarea{
                color: white;
                text-align: center;
            }
            
            .imprime{
                position: absolute;
                width: 200px; 
                height: 100px;
                top: 36%;
                left:80%;
                color: blue;
                background-color: aquamarine;
                font-size:40px;
            }
            
        </style>

    </head>
    <body class="bg" id="print">
        <div id="conteudo">
           <input class="nome" style="font-size:50px;" type="text" placeholder="Nome do(a) Participante"/>
        </div>
        <div id="botao">
            <button type="submit" class="imprime" onclick="window.print()">IMPRIMIR</button>
        </div>
    </body>
</html>
