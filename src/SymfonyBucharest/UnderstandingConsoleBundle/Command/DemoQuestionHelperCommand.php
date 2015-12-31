<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

/**
 * Show off the question helper from the Console component.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoQuestionHelperCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:helper:question')
            ->setDescription('Show off the question helper interaction');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('<question>The answer to the Ultimate Question of Life, The Universe, and Everything is 42. Correct?</question> ', true);

        if (true === $helper->ask($input, $output, $question)) {
            $output->writeln('<info>Well done!</info>');
        } else {
            $output->writeln('<error>You need to crunch the numbers again. See you in ten million years.</error>');
        }
    }

}
