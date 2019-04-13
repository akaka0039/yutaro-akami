<?php
$name = "タクミ";
$enemy = "スライム";
$numbar_attack = rand(150,500);
echo $name."は".$enemy."に".$numbar_attack."のダメージを与えた！";
PHP_EOL;
//rand関数：数値をランダムで用意してくれる
//echoで変数の出力の仕方に注目！
//全ての記述がPHPのために、改行が意図されずに含まれないように、
//終了タグを記述していない
