<?php

declare(strict_types=1);

namespace PoP\LooseContracts\Facades;

use PoP\LooseContracts\NameResolverInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class NameResolverFacade
{
    public static function getInstance(): NameResolverInterface
    {
        return ContainerBuilderFactory::getInstance()->get('loose_contract_name_resolver');
    }
}
