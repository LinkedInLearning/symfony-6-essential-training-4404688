<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(
	name       : 'roll-dice',
	description: 'Rolls Dice',
)]
class RollDiceCommand extends Command {
	public function __construct( private MessageBusInterface $message_bus ) {
		parent::__construct();
	}

	protected function configure(): void {
		$this
			->addArgument( 'sides', InputArgument::OPTIONAL, 'How many sides the dice have?', 6 );
	}

	protected function execute( InputInterface $input, OutputInterface $output ): int {
		$envelope = $this->message_bus->dispatch( new \App\Message\DiceRoll( $input->getArgument( 'sides' ) ) );
		
		print_r( $envelope->getMessage() );
		
		return Command::SUCCESS;
	}
}
