<?php

namespace App\Documents\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CalculateCommand extends Command
{
    protected static $defaultName = 'documents:calculate';

    protected function configure(): void
    {
        $this->setDescription('Return the sum of all documents');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //TODO add the calculation here

        return Command::SUCCESS;
    }
}