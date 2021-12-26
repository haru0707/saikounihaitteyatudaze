<?php
// ChatAppライブラリ
class ChatApp {
  public $title;
  public $script;
  public $file;
  // アプリケーションの設定[タイトル、説明、アプリを保存するファイル]
  function __construct($title, $script, $file){
    $this->title = $title;
    $this->script = $script;
    $this->file = $file;
  }
}
?>
