<?php

declare(strict_types=1);

namespace PoP\LooseContracts;

abstract class AbstractNameResolver implements NameResolverInterface
{
    protected $looseContractManager;

    function __construct(
        LooseContractManagerInterface $looseContractManager
    ) {
        $this->looseContractManager = $looseContractManager;
    }

    public function implementName(string $abstractName, string $implementationName)
    {
        $this->looseContractManager->implementNames([$abstractName]);
    }

    public function implementNames(array $names)
    {
        $this->looseContractManager->implementNames(array_keys($names));
    }
}
