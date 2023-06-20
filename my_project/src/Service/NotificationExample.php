<?php
declare( strict_types=1 );


namespace App\Service;

use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;

class NotificationExample {
	
	public function __construct( private NotifierInterface $notifier ) {
	}
	
	public function send_notice( string $subject ): void {
		
		$notification = new Notification( $subject, ['email', 'sms'] );
		$notification
			->content( 'This is the content of the notification' )
			->emoji( '🤯' );
		
		
		$recipient = new Recipient( 'email', 'phone');
		
		$this->notifier->send( $notification, $recipient );
	}

}
