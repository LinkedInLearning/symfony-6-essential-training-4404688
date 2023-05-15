<?php

namespace App\Command;

use App\Service\CoinFlipService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'tool:coin-flip',
    description: 'Add a short description for your command',
)]
class ToolCoinFlipCommand extends Command
{
	
	private CoinFlipService $coin_flip_service;
	
	public function __construct( CoinFlipService $coin_flip_service ) {
		$this->coin_flip_service = $coin_flip_service;
		parent::__construct();
	}

	protected function configure(): void
    {
        $this
			->setName('tool:coin-flip')
            ->addArgument(
				'arg1',
				InputArgument::OPTIONAL, 
				'Argument description',
				1
			)
        ;
    }

	protected function execute(InputInterface $input, OutputInterface $output): int
    {
		
		$this->coin_flip_service->flipCoin();
		
        $io = new SymfonyStyle($input, $output);
		
		$io->note( sprintf( 'You flipped a coin and got: %s', $this->coin_flip_service->flipCoin() ) );
		
        return Command::SUCCESS;
    }
}
