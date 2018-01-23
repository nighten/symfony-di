<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheBox;

use SymfonyTasks\DI\Common\StaticCounter;
use SymfonyTasks\DI\Common\Tests\TheBox\Task4;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class Task4Test extends Task4
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $container->register('static_counter', StaticCounter::class)
            ->setShared(false);
        return $container;
    }
}
