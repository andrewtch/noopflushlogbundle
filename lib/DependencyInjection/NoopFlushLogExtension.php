<?php

namespace Noop\FlushLogBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class NoopFlushLogExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $configs = $this->processConfiguration($configuration, $configs);

        dump('oh hello here');
    }

}
