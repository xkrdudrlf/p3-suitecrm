<?php

namespace Container6RLptQf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyDropdownFunctionDefinitionMapperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\FieldDefinitions\LegacyHandler\CurrencyDropdownFunctionDefinitionMapper' shared autowired service.
     *
     * @return \App\FieldDefinitions\LegacyHandler\CurrencyDropdownFunctionDefinitionMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/LegacyHandler/FieldDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/FieldDefinitions/LegacyHandler/CurrencyDropdownFunctionDefinitionMapper.php';

        return $container->privates['App\\FieldDefinitions\\LegacyHandler\\CurrencyDropdownFunctionDefinitionMapper'] = new \App\FieldDefinitions\LegacyHandler\CurrencyDropdownFunctionDefinitionMapper(($container->privates['App\\Currency\\LegacyHandler\\CurrencyHandler'] ?? $container->getCurrencyHandlerService()));
    }
}
