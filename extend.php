<?php
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('拓也','坂本');
$bp->work(); //坂本拓也は働いてます
$bp->show();