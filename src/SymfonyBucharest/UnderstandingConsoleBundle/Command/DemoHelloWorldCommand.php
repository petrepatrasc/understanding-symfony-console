<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Greet a person or group of people.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoHelloWorldCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:hello')
            ->setDescription('Greet a person or group of people')
            ->addArgument('who', InputArgument::OPTIONAL, 'The person or group to greet', 'World')
            ->addOption('greeting', 'g', InputOption::VALUE_OPTIONAL, 'The greeting to use', 'Hello');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $who = $input->getArgument('who');
        $greeting = $input->getOption('greeting');

        $output->writeln("{$greeting} {$who}!");
    }
}
