<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
session_start();
$PATH_APP = explode("script", str_replace("\\", "/", dirname(__DIR__)));
include $PATH_APP[0]."/checa_sessao.php";
require $PATH_APP[0]."/controller/FileControl.php";

$nameFile = date("Y.m.d");
$pathFile = $PATH_APP[0]."/mensagens/".$nameFile.".txt";
$mode="read";

$file = new FileControl($pathFile, $mode);
$file->readFile();

  
