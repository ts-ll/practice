<?php
class Person{
    public $firstName;
    public $lastName;

    public function show(){
        //$thisはインスタンスメソッド(静的ではないメソッド)の中でのみ利用できる変数
        //現在のインスタンスを指す
        //メソッドからプロパティを操作する時に使用する
        print "<p> ぼくの名前は{$this->lastName}{$this->firstName}です。</p>";
    }
}
?>