<?php
namespace PoP\LooseContracts\Contracts;

interface NameResolverInterface
{
    public function getName(string $name);
    public function implementName(string $abstractName, string $implementationName);
    public function implementNames(array $names);
}
