<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheYaml;

use SymfonyTasks\DI\Common\Tests\TheBox\Task3;
use Psr\Container\ContainerInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class Yaml1Test extends Task3
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . 'config'));
        $loader->load('services_test_1.yaml');
        return $container;
    }
}
