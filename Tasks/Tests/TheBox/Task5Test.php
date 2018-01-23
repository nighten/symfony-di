<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheBox;

use SymfonyTasks\DI\Common\FactoryCounter;
use SymfonyTasks\DI\Common\Tests\TheBox\Task5;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class Task5Test extends Task5
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $container->register('static_counter')
            ->setFactory([FactoryCounter::class, 'create']);
        return $container;

    }

}
