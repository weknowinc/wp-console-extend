<?php

/**
 * @file
 * Contains \WP\Console\Extend\Command\ExampleCommand
 */

namespace WP\Console\Extend\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use WP\Console\Core\Style\WPStyle;
use WP\Console\Core\Command\Command;

/**
 * Class ExampleCommand
 *
 * @package WP\Console\Extend\Command
 */
class ExampleCommand extends Command
{
    /**
     * {@inheritdoc}
     */

    /**
     * ExampleCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('extend:example')
            ->setDescription('WP Console global example ');
    }

    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new WPStyle($input, $output);
        $io->commentBlock('Extend example command.');
        $io->warning('This is a warning');
    }
}
