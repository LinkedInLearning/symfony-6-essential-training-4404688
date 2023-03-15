<?php
declare( strict_types=1 );


namespace App\Service;

class CoinFlipService {
	
	public function flip(): string {
		return random_int( 0, 1 ) ? 'heads' : 'tails';
	}

}
