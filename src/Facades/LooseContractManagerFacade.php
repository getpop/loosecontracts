<?php
namespace PoP\LooseContracts\Facades;

use PoP\LooseContracts\LooseContractManagerInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class LooseContractManagerFacade
{
    public static function getInstance(): LooseContractManagerInterface
    {
        return ContainerBuilderFactory::getInstance()->get('loose_contract_manager');
    }
}
