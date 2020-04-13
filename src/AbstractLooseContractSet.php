<?php
namespace PoP\LooseContracts;

abstract class AbstractLooseContractSet
{
    protected $looseContractManager;

    function __construct(
        LooseContractManagerInterface $looseContractManager
    ) {
        $this->looseContractManager = $looseContractManager;

        // Require the configured hooks and names
        $this->looseContractManager->requireHooks(
            $this->getRequiredHooks()
        );
        $this->looseContractManager->requireNames(
            $this->getRequiredNames()
        );
    }

    public function getRequiredHooks()
    {
        return [];
    }
    public function getRequiredNames()
    {
        return [];
    }
}
