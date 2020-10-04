<?php
class Human{
    public $firstName;
    public $lastName;

//文字列の引数を初期化する処理
//オブジェクトのプロパティfirstNameを初期化
public function __construct (string $firstName, string $lastName ){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
}

public function show(){
    print "<p>ぼくの名前は{$this->lastName}{$this->firstName}です。</p>";
}
//クラスが文字列に変換された際の処理を記述
//オブジェクトのプロパティlastNameとfirstNameの文字列を結合して返す
public function __toString(){
    return $this->lastName.$this->firstName;
}

//ダンプを行う際にプロパティの情報を取得する処理を記述
public function __debugInfo(){
    return[
        '名' => $this->firstName,
        '性' => $this->lastName,
    ];

}
}