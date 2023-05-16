<?php
declare( strict_types=1 );


namespace App\Message;

class DiceRoll {
	
	public function __construct( private int $sides ) {
	}
	
	public function getSides(): int {
		return $this->sides;
	}

}
