<?php

declare(strict_types=1);

namespace Zxin\PhpEnv;

use League\Container\Container;
use Symfony\Component\Console\Application;
use Zxin\PhpEnv\Command\LibInstallManage;
use Zxin\PhpEnv\Command\PhpManage;

final class App
{
    /**
     * @var App
     */
    private static $instance;

    /**
     * @var Container
     */
    private $container;

    /**
     * @var string[]
     */
    private $commands = [
        PhpManage::class,
        LibInstallManage::class,
    ];

    public static function getInstance(): App
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->container = new Container();
        $this->container->defaultToShared();
        $this->initConsole();
    }

    private function initConsole()
    {
        $this->container->add(Application::class, function () {
            $console = new Application('phpEnv', '1.0.0');
            foreach ($this->commands as $command) {
                $console->add(new $command());
            }
            return $console;
        })->setAlias('console');
    }

    public function getConsole(): Application
    {
        return $this->container->get('console');
    }
}

