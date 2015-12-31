<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Show off the progress helper of the console component;
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoProgressHelperCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:helper:progress')
            ->setDescription('Show off the progress helper');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var ProgressBar $progress */
        $progress = new ProgressBar($output);
        $progress->start(10);

        for ($iterator = 0; $iterator < 10; $iterator++) {
            $progress->advance();
            sleep(1);
        }

        $output->writeln(PHP_EOL . 'All done!');
    }
}
