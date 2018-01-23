<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheBox;

use SymfonyTasks\DI\Common\Tests\TheBox\Task3;
use SymfonyTasks\DI\Common\StaticCounter;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class Task3Test extends Task3
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $container->register('static_counter', StaticCounter::class);
        return $container;
    }
}
