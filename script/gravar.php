<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
session_start();
$PATH_APP = explode("script", str_replace("\\", "/", dirname(__DIR__)));
include $PATH_APP[0]."/checa_sessao.php";
require_once $PATH_APP[0]."/controller/FileControl.php";

$mensagem = $_POST['txtMensagem'];
$nameFile = date("Y.m.d");
$pathFile = "../mensagens/".$nameFile.".txt";
$mode="write";
$content = "<b style='letter-spacing:1px;"
          ."color:".$_SESSION['cor'].";'>"
          .$_SESSION['nome'] . ": </b> "
          .$mensagem ."\r\n\n";

$file = new FileControl($pathFile, $mode);
$file->writeFile($content);
$file->closeFile();


