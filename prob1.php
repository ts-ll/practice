<?php
//外部ファイル呼び出し
require_once 'person2.php';
$p = new Person();
$p->lastName = '太郎';
$p->firstName = '山田';
print "<p> ぼくの名前は{$p->lastName}{$p->firstName}です。</p>";
?>