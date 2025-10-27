<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[AsCommand('app:load', 'Load data')]
class LoadCommand
{
	public function __construct()
	{
	}


	public function __invoke(SymfonyStyle $io): int
	{
		$io->success(self::class . " success.");
		return Command::SUCCESS;
	}
}
