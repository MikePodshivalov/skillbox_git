<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Repeat extends Command
{

    protected function configure(): void
    {
        $this
            ->setName('repeat')
            ->setDescription('repeat string')
            ->addArgument('string', InputArgument::REQUIRED, 'the string to repeat')
            ->addOption(
                'i',
                null,
                InputOption::VALUE_OPTIONAL,
                'How many times should the message be printed?',
                2
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        for ($i = 0; $i < $input->getOption('i'); $i++) {
            $output->writeln($string);
        }
        return Command::SUCCESS;
    }
}
