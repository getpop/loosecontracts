<?php
namespace PoP\LooseContracts\Facades\Contracts;

use PoP\LooseContracts\Contracts\NameResolverInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class NameResolverFacade
{
    public static function getInstance(): NameResolverInterface
    {
        return ContainerBuilderFactory::getInstance()->get('loose_contract_name_resolver');
    }
}
