<?php
declare( strict_types=1 );


namespace App\Controller;

use App\Service\CoinFlipService;
use App\Service\DiceRollService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {

	private $diceRollService;
	private $coinFlipService;

	public function __construct( DiceRollService $diceRollService, CoinFlipService $coinFlipService ) {
		$this->diceRollService = $diceRollService;
		$this->coinFlipService = $coinFlipService;
	}

	#[Route( '/roll', name: 'dice_roll' )]
	public function roll(): Response {
		return new Response( 'Oh look, we rolled a: ' . $this->diceRollService->roll() );
	}

	#[Route( '/flip', name: 'coin_flip' )]
	public function flip(): Response {
		return new Response( 'Oh look, it landed on: ' . $this->coinFlipService->flip() );
	}

}
