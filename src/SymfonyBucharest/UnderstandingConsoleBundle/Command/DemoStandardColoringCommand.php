<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Show samples of the standard coloring options in Symfony.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoStandardColoringCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:coloring:standard')
            ->setDescription('Show off the standard styles available in Symfony');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // green text
        $output->writeln('<info>Information message</info>');

        // yellow text
        $output->writeln('<comment>A comment</comment>');

        // black text on a cyan background
        $output->writeln('<question>User interaction/Question</question>');

        // white text on a red background
        $output->writeln('<error>Errors, exceptions, all that good stuff</error>');
    }

}
