<?php
class Person{
    public $firstName;
    public $lastName;

    //()内の引数:$firstNameと引数:$lastNameを初期化する
    //コンストラクタはプロパティの初期化や
    //クラス内部で使用する外部リソースの初期化を行う時に使用する
    //注意点：あくまでインスタンスを初期化する為のメソッドであり、
    // 　　　 それ自体がインスタンスを返す訳ではない。
    //       コンストラクタはなんらかの戻り値を返す必要がなく
    //       戻り値を返してはいけない
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