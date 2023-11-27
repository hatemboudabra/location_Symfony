<?php

namespace Container2tJSjeh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RvKixe8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RvKixe8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RvKixe8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'vr' => ['privates', 'App\\Repository\\VOITURERepository', 'getVOITURERepositoryService', true],
        ], [
            'vr' => 'App\\Repository\\VOITURERepository',
        ]);
    }
}
