<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Greet a person or group of people.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Console
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class HelloWorldDemoCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('demo:hello')
            ->setDescription('Greet a person or group of people')
            ->addArgument('who', InputArgument::OPTIONAL, 'The person or group to greet', 'World');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $who = $input->getArgument('who');

        $output->writeln("Hello {$who}!");
    }
}
