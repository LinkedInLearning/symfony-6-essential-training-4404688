<?php
declare( strict_types=1 );

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

#[AsEventListener]
class DemoListener {

	public function __invoke( ResponseEvent $event ) {
		if( str_contains( $event->getResponse()->getContent(), 'Hi gary' ) ) {
			$event->getResponse()->setContent( 'Go away Gary!' );
		}
	}
}
