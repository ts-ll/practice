<?php
class Person{
    public $firstName;
    public $lastName;

    //()内の引数:$firstNameと引数:$lastNameを初期化する
    public function __construct(string $firstName, string $lastName){
        //firstName・lastNameのインスタンスプロパティにアクセスして、$firstNameと$lastNameのプロパティを受け取る
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show(){
        print "<p>ぼくの名前は{$this->lastName}{$this->firstName}です。</p>";
    }
}
?>