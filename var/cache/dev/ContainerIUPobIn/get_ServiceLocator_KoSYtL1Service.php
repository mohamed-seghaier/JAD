<?php

namespace ContainerIUPobIn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KoSYtL1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KoSYtL1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KoSYtL1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BrandController::allBrands' => ['privates', '.service_locator.MfgPIvT', 'get_ServiceLocator_MfgPIvTService', true],
            'App\\Controller\\BrandController::create' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\BrandController::edit' => ['privates', '.service_locator._fMjCXz', 'get_ServiceLocator_FMjCXzService', true],
            'App\\Controller\\BrandController::index' => ['privates', '.service_locator.7mtYEde', 'get_ServiceLocator_7mtYEdeService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.YNO4FUy', 'get_ServiceLocator_YNO4FUyService', true],
            'App\\Controller\\PanierController::add' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\PanierController::decrement' => ['privates', '.service_locator.kveBZ8H', 'get_ServiceLocator_KveBZ8HService', true],
            'App\\Controller\\PanierController::delete' => ['privates', '.service_locator.kveBZ8H', 'get_ServiceLocator_KveBZ8HService', true],
            'App\\Controller\\PanierController::show' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::allProducts' => ['privates', '.service_locator.YNO4FUy', 'get_ServiceLocator_YNO4FUyService', true],
            'App\\Controller\\ProductController::create' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.pN6ATyo', 'get_ServiceLocator_PN6ATyoService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.oQjFjmO', 'get_ServiceLocator_OQjFjmOService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController::paymentSuccess' => ['privates', '.service_locator.MRCceAA', 'get_ServiceLocator_MRCceAAService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm' => ['privates', '.service_locator.st2ZmG4', 'get_ServiceLocator_St2ZmG4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.KV_IRIi', 'get_ServiceLocator_KVIRIiService', true],
            'App\\Controller\\UserController::client_index' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'App\\Controller\\UserController::user' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'App\\Controller\\UserController::vendeur_index' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\BrandController:allBrands' => ['privates', '.service_locator.MfgPIvT', 'get_ServiceLocator_MfgPIvTService', true],
            'App\\Controller\\BrandController:create' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\BrandController:edit' => ['privates', '.service_locator._fMjCXz', 'get_ServiceLocator_FMjCXzService', true],
            'App\\Controller\\BrandController:index' => ['privates', '.service_locator.7mtYEde', 'get_ServiceLocator_7mtYEdeService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.YNO4FUy', 'get_ServiceLocator_YNO4FUyService', true],
            'App\\Controller\\PanierController:add' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\PanierController:decrement' => ['privates', '.service_locator.kveBZ8H', 'get_ServiceLocator_KveBZ8HService', true],
            'App\\Controller\\PanierController:delete' => ['privates', '.service_locator.kveBZ8H', 'get_ServiceLocator_KveBZ8HService', true],
            'App\\Controller\\PanierController:show' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:allProducts' => ['privates', '.service_locator.YNO4FUy', 'get_ServiceLocator_YNO4FUyService', true],
            'App\\Controller\\ProductController:create' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.pN6ATyo', 'get_ServiceLocator_PN6ATyoService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.oQjFjmO', 'get_ServiceLocator_OQjFjmOService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController:paymentSuccess' => ['privates', '.service_locator.MRCceAA', 'get_ServiceLocator_MRCceAAService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController:showCardForm' => ['privates', '.service_locator.st2ZmG4', 'get_ServiceLocator_St2ZmG4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.KV_IRIi', 'get_ServiceLocator_KVIRIiService', true],
            'App\\Controller\\UserController:client_index' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'App\\Controller\\UserController:user' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'App\\Controller\\UserController:vendeur_index' => ['privates', '.service_locator.1U1z2Jh', 'get_ServiceLocator_1U1z2JhService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\BrandController::allBrands' => '?',
            'App\\Controller\\BrandController::create' => '?',
            'App\\Controller\\BrandController::edit' => '?',
            'App\\Controller\\BrandController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\PanierController::add' => '?',
            'App\\Controller\\PanierController::decrement' => '?',
            'App\\Controller\\PanierController::delete' => '?',
            'App\\Controller\\PanierController::show' => '?',
            'App\\Controller\\ProductController::allProducts' => '?',
            'App\\Controller\\ProductController::create' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController::paymentSuccess' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::client_index' => '?',
            'App\\Controller\\UserController::user' => '?',
            'App\\Controller\\UserController::vendeur_index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BrandController:allBrands' => '?',
            'App\\Controller\\BrandController:create' => '?',
            'App\\Controller\\BrandController:edit' => '?',
            'App\\Controller\\BrandController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\PanierController:add' => '?',
            'App\\Controller\\PanierController:decrement' => '?',
            'App\\Controller\\PanierController:delete' => '?',
            'App\\Controller\\PanierController:show' => '?',
            'App\\Controller\\ProductController:allProducts' => '?',
            'App\\Controller\\ProductController:create' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController:paymentSuccess' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController:showCardForm' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:client_index' => '?',
            'App\\Controller\\UserController:user' => '?',
            'App\\Controller\\UserController:vendeur_index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}