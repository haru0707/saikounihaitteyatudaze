<?php
class Path {
  public $path;
  function __construct($path){
    $this->path = $path;
  }
  function newFile(){
    $real_path = realpath($this->path);
    $names = explode('/', $real_path);
    if(!file_exists($real_path)){
      $now_path = '';
      for($i=0;$i<count($names)-1;$i++){
        $now_path = $now_path . $names[$i] . '/';
        if(!file_exists($now_path)){
          mkdir($now_path);
        }
      }
      touch($now_path . $names[count($names) - 1]);
      if(file_exists($real_path)){
        return true;
      }
      return false;
    }else{
      return false;
    }
  }
}
?>
