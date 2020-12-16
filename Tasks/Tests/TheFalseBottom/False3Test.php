<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheFalseBottom;

use SymfonyTasks\DI\Common\Tests\TheFalseBottom\False3;
use SymfonyTasks\DI\Common\Tracker\CachingTracker;
use SymfonyTasks\DI\Common\Tracker\LoggingTracker;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

final class False3Test extends False3
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        if ($builder->has('logger')) {
            $builder->register('decorating_logger_tracker', LoggingTracker::class)
                ->setDecoratedService('tracker', null, 2)
                ->addArgument(new Reference('decorating_logger_tracker.inner'))
                ->addArgument(new Reference('logger'))
                ->setPublic(false);
        }

        if ($builder->has('cache')) {
            $builder->register('decorating_cache_tracker', CachingTracker::class)
                ->setDecoratedService('tracker', null, 1)
                ->addArgument(new Reference('decorating_cache_tracker.inner'))
                ->addArgument(new Reference('cache'))
                ->setPublic(false);
        }
    }
}
