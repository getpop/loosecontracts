<?php
namespace PoP\LooseContracts\Contracts;

abstract class AbstractNameResolver implements NameResolverInterface
{
    protected $looseContractManager;

    function __construct(
        LooseContractManagerInterface $looseContractManager
    ) {
        $this->looseContractManager = $looseContractManager;
    }

    public function implementName(string $abstractName, string $implementationName) {
		$this->looseContractManager->implementNames([$abstractName]);
    }

    public function implementNames(array $names) {
		$this->looseContractManager->implementNames(array_keys($names));
    }
}
