<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheFalseBottom;

use SymfonyTasks\DI\Common\Greeter;
use SymfonyTasks\DI\Common\GreetingController;
use SymfonyTasks\DI\Common\Tests\TheFalseBottom\False2;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

class False2Test extends False2
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $container
            ->register('greeting_controller', GreetingController::class)
            ->setArguments([
                new Definition(Greeter::class)
            ]);
        $container->addAliases([
            'controller' => 'greeting_controller',
            'greeting_action' => 'greeting_controller',
        ]);
        return $container;
    }
}
