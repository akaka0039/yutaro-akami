<?php

class Human extends Lives
{
	//プロパティ
	//constは定数を表すらしい...
	const MAX_HITPOINT = 100;//最大HPの定義・定数


	// クラスのインスタンスを生成する時のみ実行され
	public function __construct($name, $hitPoint = 100, $attackPoint = 20, $intelligence = 0 )
	{
		parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
	}


}
