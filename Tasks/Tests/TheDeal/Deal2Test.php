<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheDeal;

use SymfonyTasks\DI\Common\Circular\A;
use SymfonyTasks\DI\Common\Circular\B;
use SymfonyTasks\DI\Common\Circular\C;
use SymfonyTasks\DI\Common\Tests\TheDeal\Deal2;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class Deal2Test extends Deal2
{
    protected function getContainer(): ContainerInterface
    {
        $builder = new ContainerBuilder();
        $builder->autowire(A::class);
        $builder->autowire(B::class);
        $builder->autowire(C::class);

        $builder->setAlias('circular_a', A::class)->setPublic(true);
        $builder->setAlias('circular_b', B::class)->setPublic(true);
        $builder->setAlias('circular_c', C::class)->setPublic(true);

        $builder->compile();

        return $builder;
    }
}
