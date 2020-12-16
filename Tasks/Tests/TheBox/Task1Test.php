<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheBox;

use SymfonyTasks\DI\Common\Tests\TheBox\Task1;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;

final class Task1Test extends Task1
{
    protected function getContainer(): ContainerInterface
    {
        return new Container();
    }
}
