<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
error_reporting(E_ALL);
ini_set('display_errors', 1);
@session_start();
$PATH_APP = explode("script", str_replace("\\", "/", dirname(__DIR__)));
include $PATH_APP[0]."/checa_sessao.php";
require_once $PATH_APP[0]."/controller/FileControl.php";

$name = (isset($_SESSION["nome"]))?"--> ".$_SESSION["nome"]." saiu!\r\n\n":"";
$d=date("d");
$m=date("m");
$y=date("Y");
$diaAtual = $y.".".$m.".".$d;
$pathFile = $PATH_APP[0]."/mensagens/" . $diaAtual . ".txt";
$mode="write";
$content="---- histórico deletado com sucesso ----".$name;
$fileRemove = new FileControl($pathFile, $mode);
$fileRemove->deleteFile($pathFile);     

$file = new FileControl($pathFile, $mode);
$file->writeFile($content);

$mes31 = array("01","02", "04","06","08", "09", "11");

 if($d=="01"){
   for($i=0;$i<7;$i++){
	  if($mes31==$m){
        $d = 31;
        $m =$m-1;
        $m=($m<10)?"0".$m:$m;
        $dia = $y.".".$m.".".$d; 
        $diretorio = $PATH_APP[0]."/mensagens/" . $dia . ".txt"; 
        $file = new FileControl($diretorio, $mode);
        $file->deleteFile( $diretorio);
	  }
    }
  }else{
    $d = $d-1;
    $d=($d<10)?"0".$d:$d;
    $diaAtual = $y.".".$m.".".$d; 
    $diretorio = $PATH_APP[0]."/mensagens/" . $diaAtual . ".txt"; 
    $file = new FileControl($diretorio, $mode);
    $file->deleteFile( $diretorio);
  }

  if($diaAtual==$y.".01.01"){
        $d = 31;
        $m = 12;
	    $Y = $Y -1;
        $dia = $Y.$m.$d; 
        $diretorio = $PATH_APP[0]."/mensagens/" . $dia . ".txt"; 
        $file = new FileControl($diretorio, $mode);
        $file->deleteFile( $diretorio);
  }






