<?php
$foo = 1;


function some_function(){
	$foo = 10;  
	$bar = 20;
	//ここはローカルスコープ内（関数内）になるから
	//グローバルスコープの$fooを変更したことにならず
	//これはローカルスコープ内で新しい変数を定義したことになります
}

some_function();

echo $foo,PHP_EOL;
echo $bar,PHP_EOL;
//関数のローカルスコープ内で定義された変数はグローバルスコープでは未定義になるということ
?>
