<?php
namespace PoP\LooseContracts;

use PoP\Hooks\HooksAPIInterface;
use PoP\LooseContracts\NameResolverInterface;
use PoP\LooseContracts\LooseContractManagerInterface;

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
