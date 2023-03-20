<?php
declare( strict_types=1 );


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {
	
	// Say hello the name provided.
	#[Route('/hello/{name}', name: 'hello_world')]
	public function roll( string $name ): Response {
		return new Response( 'Hi ' . $name . '!' );
	}

}
