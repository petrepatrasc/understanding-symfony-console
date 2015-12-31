<?php


namespace SymfonyBucharest\UnderstandingConsoleBundle\Command;


use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Show usage of the table helper of the Console component.
 *
 * @package SymfonyBucharest\UnderstandingConsoleBundle\Command
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DemoTableHelperCommand extends ContainerAwareCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('demo:helper:table')
            ->setDescription('Show off the table helper');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $faker = Factory::create();

        $table = (new Table($output))
            ->setHeaders([
                'ID',
                'First Name',
                'Last Name',
                'Company',
            ]);

        for ($iterator = 0; $iterator < 10; $iterator++) {
            $table->addRow([
                $faker->uuid,
                $faker->firstName,
                $faker->lastName,
                $faker->company,
            ]);
        }

        $table->render();
    }
}
