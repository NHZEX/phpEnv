<?php

namespace Zxin\PhpEnv\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PhpManage extends Command
{
    protected static $defaultName = 'php';

    protected function configure()
    {
        $this
            ->setDescription('manage php')
            ->addOption('list', 'l', InputOption::VALUE_OPTIONAL);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return 0;
    }
}
