<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
require_once"checa_sessao.php";
require_once 'script/apagar.php';
session_start();
session_unset();
session_destroy();
session_write_close();



header("Location:index.php");