<?php

namespace Zxin\PhpEnv\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class LibInstallManage
 * @package Zxin\PhpEnv\Command
 * @todo show, install, update, remove
 */
class LibInstallManage extends Command
{
    protected static $defaultName = 'lib:install';

    protected function configure()
    {
        $this
            ->setDescription('manage: install lib')
            ->addArgument('lib name', InputArgument::OPTIONAL)
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
