<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('say_hello')
            ->setDescription('app will say Hello to argument')
            ->addArgument('string', InputArgument::REQUIRED, 'the line to say hello to')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');
        $output->writeln('Привет ' . $string);
        return Command::SUCCESS;
    }
}
