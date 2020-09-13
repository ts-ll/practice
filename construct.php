<?php
require_once 'Person4.php';
//外部読み込みした'Person4.php'で行ったコンストラクタの()内に記述した
//$firstName , $lastNameの順に対して'太郎','山田'の順に入れていく
$p = new Person('太郎', '山田');
$p->show();
?>