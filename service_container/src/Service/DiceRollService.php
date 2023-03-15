<?php
declare( strict_types=1 );

namespace App\Service;
class DiceRollService {
	
	public function roll( int $sides = 6 ): int {
		return random_int( 1, $sides );
	}

}
