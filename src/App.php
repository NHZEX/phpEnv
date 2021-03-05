<?php

declare(strict_types=1);

namespace Zxin\PhpEnv;

use League\Container\Container;
use Symfony\Component\Console\Application;

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
            return new Application('phpEnv', '1.0.0');
        })->setAlias('console');
    }

    public function getConsole(): Application
    {
        return $this->container->get('console');
    }
}

