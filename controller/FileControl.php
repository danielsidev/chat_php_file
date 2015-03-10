<?php
/*******************************************************************
@An small web application for to demonstrate how to use files in PHP
@An small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
$PATH_APP = explode("controler", str_replace("\\", "/", dirname(__DIR__)));
require_once $PATH_APP[0]."/model/FileModel.php";

class FileControl extends FileModel{
    
    protected $content="";
    protected $pathFile="";
    protected $numberCaracter=0;
    
    public function __construct($pathFile, $mode) {
      //  $this->pathFile = $pathFile;
        parent::__construct($pathFile, $mode);
    }
    
    public function readFile() {
        if(file_exists($this->pathFile)){ 
          $this->content= parent::readFile();
          $this->content = nl2br($this->content);        
          echo $this->content;
          parent::closeFile();
        }else{
          echo "File not exists!";
            
        }
    }
    
    public function writeFile($content) {
        parent::writeFile($content);
        parent::closeFile();
    }
    
    public function deleteFile($pathFile) {
     $this->pathFile = $pathFile;
        if(isset($this->pathFile)){
         $this->numberCaracter = strlen($this->pathFile);
            if($this->numberCaracter>0){
             parent::deleteFile($pathFile);
            }
        }
    }
    
    
}

