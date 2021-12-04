<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestionToUser extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('quest');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Введите Ваше имя: ', 'имя отсутствует');

        $questionAge = new Question('Введите Ваш возраст: ', 'возраст отсутствует');
        $questionAge->setValidator(function ($answer) {
            if (!is_numeric($answer)) {
                throw new \RuntimeException(
                    'The age must be a number'
                );
            }
            return $answer;
        });

        $questionSex = new ChoiceQuestion(
            'Ваш пол: ',
            ['M', 'Ж'],
            '0,1'
        );

        $name = $helper->ask($input, $output, $questionName);
        $age = $helper->ask($input, $output, $questionAge);
        $sex = $helper->ask($input, $output, $questionSex);

        $output->writeln('Здравствуйте, ' . $name . ' Ваш возраст: ' . $age . ' Ваш пол: ' . $sex);

        return Command::SUCCESS;
    }
}
