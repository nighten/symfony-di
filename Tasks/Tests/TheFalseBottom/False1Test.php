<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheFalseBottom;

use SymfonyTasks\DI\Common\Greeter;
use SymfonyTasks\DI\Common\GreetingController;
use SymfonyTasks\DI\Common\Tests\TheFalseBottom\False1;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

final class False1Test extends False1
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $container
            ->register('greeting_controller', GreetingController::class)
            ->setArguments([
                new Definition(Greeter::class)
            ]);
        return $container;
    }
}
