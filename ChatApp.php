<?php
// ChatAppライブラリ
class ChatApp {
  public $title;
  public $script;
  public $path;
  // アプリケーションの設定[タイトル、説明、アプリを保存するファイル]
  // 既にアプリを保存するファイルはあるものとしていますので、実在するファイルパスをお願いします。拡張子は[.json]が好ましいです。
  function __construct($title, $script, $path){
    $this->title = $title;
    $this->script = $script;
    $this->path = realpath($path);
  }
  function buildApp(){
    $data = $this->getUp();
    if(is_string($this->title) && is_string($this->script)){
      $data['settings']['title'] = $this->title;
      $data['settings']['script'] = $this->script;
      $data['settings']['path'] = $this->path;
      if($this->postUp($data)){
        return true;
      }
    }
    return false;
  }
  private function postUp($data){
    $json = json_encode($data);
    $fp = fopen($this->$)
    if($fp){
      if(flock($fp, LOCK_SH)){
        if(fwrite($fp, $json)){
          if(flock($fp, LOCK_UN)){
            if(fclose($fp)){
              return true;
            }
          }
        }
      }
    }
    return false;
  }
  private function getUp(){
    return json_decode(file_get_contents($this->path), true);
  }
}
?>
