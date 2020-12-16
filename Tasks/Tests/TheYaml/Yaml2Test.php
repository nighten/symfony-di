<?php

namespace SymfonyTasks\DI\Tasks\Tests\TheYaml;

use SymfonyTasks\DI\Common\Tests\TheBox\Task4;
use Psr\Container\ContainerInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class Yaml2Test extends Task4
{
    protected function getContainer(): ContainerInterface
    {
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . 'config'));
        $loader->load('services_test_2.yaml');
        return $container;
    }
}
