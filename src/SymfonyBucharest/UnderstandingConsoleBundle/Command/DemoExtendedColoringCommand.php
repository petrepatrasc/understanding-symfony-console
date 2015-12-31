<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Show off custom styling for Command outputs.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoExtendedColoringCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:coloring:extended')
            ->setDescription('Show off custom output styles');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $yoloStyle = new OutputFormatterStyle('yellow', 'green', ['bold']);
        $output->getFormatter()->setStyle('yolo', $yoloStyle);

        $output->writeln('<yolo>Custom style</yolo>');
    }
}
