<?php

$hour = date('G'); //現在の時刻を習得

switch($hour){
	case'6';
	echo "朝の6時です。おはようございます。";
	break;
	case'12';
	echo" 正午です。こんにちは。";
	break;
	case'15';
	echo"3時のおやつです。今日はプリンです。";
	break;
	case'23';
	case'0';//複数やることも可能
	case'1';
	echo"もう寝る時間です";
	break;
	default:
	echo"どうも",PHP_EOL;
	break;
}



