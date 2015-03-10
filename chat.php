<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

if(isset($_POST)){
$logar=false;  
/************************ Your Users and Passwords *******************************/
$user = array(md5("user1"), md5("user2"), md5("user3"));
$pass = array(md5("123"), md5("456"), md5("789"));  
/************************ Your Users and Passwords *******************************/
$login = md5($_POST["txtNickName"]);
$senha = md5($_POST["txtSenha"]);
$c = count($user);

  for($i=0;$i<$c;$i++){
    if($login==$user[$i] && $senha==$pass[$i]){
       $logar=true;
    }    
  }
  
if($logar==true){
    session_start();
    $_SESSION["nome"] = $_POST["txtNickName"];
    $_SESSION["senha"] = $senha ;
    $_SESSION["cor"] = $_POST["opColor"];
    require_once"checa_sessao.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat</title>
        <link rel="stylesheet" href="script/style.css" type="text/css" madia="all" />
        <script type="text/javascript" src="script/jquery.js"></script> 
      
        <script type="text/javascript">
        var altura = 600; 
            $(document).ready(function() {
      
      /************************ Time of answer *******************************/
                setInterval(function(){ 
                  $("#dvMensagem").load("script/ler.php")
                   altura = altura+200;          
		  $('#dvMensagem').animate({ scrollTop: altura }, "fast");
                },3000); //  3 seconds, Use at least 5
                //Submit less refresh with ajax
      /************************ Time of answer *******************************/
      
                    $('#frmChat').submit(function() { //Submit do formulário
                    var dados = $(this).serialize();
                    $.ajax({
                        type: "POST", // send for POST
                        url: "script/gravar.php", //Page for where the data is sent
                        data: dados,
                        success: function(data, textStatus, jqXHR) //If success...
                        {
                            //console.log(data); // check the console log for result
                            $("#resultado").html(data);//Show the result in div
                            document.getElementById("frmChat").reset(); //To clean the field where you typed the message
                        },
	                    error: function (jqXHR, textStatus, errorThrown)/*If it's ok check the console log */
	                    {
	    	          console.log("ERRO!!! Não conseguiu!");
	    	          console.log(textStatus);    
	                   }
                    });
                    return false;
                });
                                           
            });
        </script>
    </head>
    <body>
        <div >
            <div id="dvMensagem">
            </div>
            <form method="post" action="#" name="frmChat" id="frmChat">
                <p style="color:#FFFFFF; padding:3px;">Mensagem:</p>
                <input type="text" style="heigth:100px;width: 100%; " name="txtMensagem" id="txtMensagem" required></textarea>
                <br />
                <input  type="submit" name="btnSubmit" id="btnSubmit" value="Enviar" />
                <a id="linkSair" href="sair.php"><div id="btsair">Sair</div> </a>
                <p id="resultado"></p>
            </form>
        </div>  
    </body>
</html>

<?php 
    }else{header("Location:index.php?r=dados_invalidos");}
}else{
    header("Location:index.php");
}      
?>