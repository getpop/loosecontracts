<?php
namespace PoP\LooseContracts;

interface NameResolverInterface
{
    public function getName(string $name);
    public function implementName(string $abstractName, string $implementationName);
    public function implementNames(array $names);
}
