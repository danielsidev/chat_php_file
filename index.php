<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat Sem Refresh - SatellaSoft</title>
        <link rel="stylesheet" href="script/style.css" type="text/css" madia="all" /> <!-- Importamos um documento css a página-->
    </head>
    <body>
        <div id="dvLogin">
            <form action="chat.php" name="frmLogin" id="frmLogin" method="post"> <!-- Criamos um formulário e setamos o post para chat.php -->
                <p style="color: #00FF00;">Login:<input type="password" class="campo" name="txtNickName" id="txtNickName" placeholder="Seu login aqui" required/></p> 
                <p style="color: #00FF00;">Passw:<input type="password" class="campo" name="txtSenha" id="txtSenha" placeholder="Sua senha aqui" required/></p> 
                <p style="color: #00FF00;">Color:<select name="opColor"  required class="campo">
                        <option value="#FFFFFF">Branco</option>
                        <option value="#111111">Cinza</option>
                        <option value="#1E90FF">Azul</option>
                        <option value="#00FF00">Verde</option>
                        <option value="#FFFF00">Amarelo</option>
                        <option value="#8B4513">Marrom</option>
                        <option value="#FF4500">laranja</option>
                        <option value="#FF0000">Vermelho</option>
                        <option value="#FF1493">Rosa</option>
                        <option value="#D02090">Violeta</option>
                        <option value="#A020F0">Roxo</option>
                    </select>
                </p><br/>
                <input  type="submit" name="btnSubmit" id="btnSubmit" value="Entrar" class="campo"/>
            </form>
        </div>  
    </body>
</html>

