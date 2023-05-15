<?php
declare( strict_types=1 );


namespace App\Service;

class CoinFlipService {
	
	public function flipCoin(): string {
		return rand( 0, 1 ) ? 'heads' : 'tails';
	}

}
