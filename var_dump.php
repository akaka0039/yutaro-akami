<?php

$a = 1;
$b = "foo bar";
$C = array(1,2,3);

var_dump($a);
//int(1)


var_dump($b);
//string(7)  "foo bar"


var_dump($c);


var_dump($a == $b);
//bool(false)
//論理値など型情報等など出力したい場合、配列も
//var_dump()関数を用いることができる、echoの他にね

