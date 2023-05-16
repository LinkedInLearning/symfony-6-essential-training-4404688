<?php
declare( strict_types=1 );


namespace App\MessageHandler;

use App\Message\DiceRoll;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class DiceRollHandler {
	
	public function __construct( private LoggerInterface $logger ) {
	}

	public function __invoke( DiceRoll $dice_roll ): int {
		$roll = rand( 1, $dice_roll->getSides() );
		
		$this->logger->info( sprintf( 'You rolled a %d', $roll ) );
		
		return $roll;
	}
	
}
