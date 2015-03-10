<?php
/*******************************************************************
@A small web application for to demonstrate how to use files in PHP
@A small application of chat using files txt
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
class FileModel{
    
    protected $pathFile="";
    protected $file=null;
    protected $content ="";
    /*@Modos do arquivo: Leitura(read) ou Escrita(write)*/
    private $mode=array("read"=>"r", "write"=>"a+");
    
    public function __construct($pathFile, $mode) {
    
        $this->pathFile = $pathFile;
        $this->file = fopen($this->pathFile, $this->mode[$mode]);        
    }
    
    public function readFile(){
        
        $this->content = fread($this->file, filesize($this->pathFile));
        return $this->content;
    }
        
    public function writeFile($content){
        $this->content = fwrite($this->file, $content);
    }
    
    public function closeFile(){
        fclose($this->file);
    }
    
    public function deleteFile($pathFile){
        unlink($pathFile);
    }
    
    
    
}

