<?php
require_once 'Human.php';
class BusinessPerson extends Human{
    //サブクラス独自のworkメソッドを定義
    public function work(){
     print "<p>{$this->lastName}{$this->firstName}は働いてます。</p>";
    }

}
?>