<?php



class Enemy extends lives
{
	const MAX_HITPOINT = 50;


	public function __construct($name, $attackPoint) // ここを変更
    {
			$hitPoint = 50;
        $intelligence = 0;
        parent::__construct($name, $hitPoint, $attackPoint, $intelligence);
    }


	
}
