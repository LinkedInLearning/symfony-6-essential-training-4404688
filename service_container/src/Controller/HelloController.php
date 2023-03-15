<?php
declare( strict_types=1 );


namespace App\Controller;

use App\Service\DiceRollService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {
	
	private $diceRollService;
	
	public function __construct( DiceRollService $diceRollService ) {
		$this->diceRollService = $diceRollService;
	}
	#[Route('/roll', name: 'dice_roll')]
	public function roll(): Response {
		return new Response( 'Oh look, we rolled a: ' . $this->diceRollService->roll() );
	}

}
