<?php
class Person{

    //プロパティ：クラスの中で定義された変数
    //※メンバ変数とも言う

    //プロパティに初期値を与えない場合    
    public $firstName;
    public $lastName;

    //プロパティに初期値を与える場合
    public $middleName = 'なんとか';
    public $callName = '123';

    //注意点
    //ヒアドキュメント、配列リテラルを含めた任意のリテラル、演算子は指定できるが
    //関数/メソッドの呼び出しはエラーになる。　

}
?>