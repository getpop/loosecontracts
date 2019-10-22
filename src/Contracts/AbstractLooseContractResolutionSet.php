<?php
namespace PoP\Engine\LooseContracts;

use PoP\Hooks\Contracts\HooksAPIInterface;
use PoP\LooseContracts\Contracts\NameResolverInterface;
use PoP\LooseContracts\Contracts\LooseContractManagerInterface;

abstract class AbstractLooseContractResolutionSet
{
    protected $looseContractManager;
    protected $nameResolver;
    protected $hooksAPI;
    public function __construct(
        LooseContractManagerInterface $looseContractManager,
        NameResolverInterface $nameResolver,
        HooksAPIInterface $hooksAPI
    ) {
        $this->looseContractManager = $looseContractManager;
        $this->nameResolver = $nameResolver;
        $this->hooksAPI = $hooksAPI;

        $this->resolveContracts();
    }
    /**
     * Function to execute all code to satisfy the contracts
     *
     * @return void
     */
    protected abstract function resolveContracts();
}
