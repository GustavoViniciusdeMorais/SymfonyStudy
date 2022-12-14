<?php

namespace ContainerN8YiE1u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SgTy1ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sgTy1_Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sgTy1_Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BlogController::delete' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\Admin\\BlogController::edit' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\Admin\\BlogController::index' => ['privates', '.service_locator.OfDrtWW', 'get_ServiceLocator_OfDrtWWService', true],
            'App\\Controller\\Admin\\BlogController::new' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\Admin\\BlogController::show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController::commentForm' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController::commentNew' => ['privates', '.service_locator.F1lnlr1', 'get_ServiceLocator_F1lnlr1Service', true],
            'App\\Controller\\BlogController::index' => ['privates', '.service_locator.J7n8Hxc', 'get_ServiceLocator_J7n8HxcService', true],
            'App\\Controller\\BlogController::postShow' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController::search' => ['privates', '.service_locator.Ge47UTU', 'get_ServiceLocator_Ge47UTUService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.Y36a2hS', 'get_ServiceLocator_Y36a2hSService', true],
            'App\\Controller\\UserController::changePassword' => ['privates', '.service_locator.vQH8NxC', 'get_ServiceLocator_VQH8NxCService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\BlogController:delete' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\Admin\\BlogController:edit' => ['privates', '.service_locator.ckGzNSR', 'get_ServiceLocator_CkGzNSRService', true],
            'App\\Controller\\Admin\\BlogController:index' => ['privates', '.service_locator.OfDrtWW', 'get_ServiceLocator_OfDrtWWService', true],
            'App\\Controller\\Admin\\BlogController:new' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\Admin\\BlogController:show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController:commentForm' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController:commentNew' => ['privates', '.service_locator.F1lnlr1', 'get_ServiceLocator_F1lnlr1Service', true],
            'App\\Controller\\BlogController:index' => ['privates', '.service_locator.J7n8Hxc', 'get_ServiceLocator_J7n8HxcService', true],
            'App\\Controller\\BlogController:postShow' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Controller\\BlogController:search' => ['privates', '.service_locator.Ge47UTU', 'get_ServiceLocator_Ge47UTUService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.Y36a2hS', 'get_ServiceLocator_Y36a2hSService', true],
            'App\\Controller\\UserController:changePassword' => ['privates', '.service_locator.vQH8NxC', 'get_ServiceLocator_VQH8NxCService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\BlogController::delete' => '?',
            'App\\Controller\\Admin\\BlogController::edit' => '?',
            'App\\Controller\\Admin\\BlogController::index' => '?',
            'App\\Controller\\Admin\\BlogController::new' => '?',
            'App\\Controller\\Admin\\BlogController::show' => '?',
            'App\\Controller\\BlogController::commentForm' => '?',
            'App\\Controller\\BlogController::commentNew' => '?',
            'App\\Controller\\BlogController::index' => '?',
            'App\\Controller\\BlogController::postShow' => '?',
            'App\\Controller\\BlogController::search' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::changePassword' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\BlogController:delete' => '?',
            'App\\Controller\\Admin\\BlogController:edit' => '?',
            'App\\Controller\\Admin\\BlogController:index' => '?',
            'App\\Controller\\Admin\\BlogController:new' => '?',
            'App\\Controller\\Admin\\BlogController:show' => '?',
            'App\\Controller\\BlogController:commentForm' => '?',
            'App\\Controller\\BlogController:commentNew' => '?',
            'App\\Controller\\BlogController:index' => '?',
            'App\\Controller\\BlogController:postShow' => '?',
            'App\\Controller\\BlogController:search' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:changePassword' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
