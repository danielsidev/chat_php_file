<?php
/*******************************************************************
@An small web application for to demonstrate how to use files in PHP
@An small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
@session_start();

    if($_SESSION["nome"] =="" && $_SESSION["senha"]==""){
        
         header("Location:../index.php");
    }


?>
