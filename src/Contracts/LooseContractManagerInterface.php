<?php
namespace PoP\LooseContracts\Contracts;

interface LooseContractManagerInterface
{
    public function getNotImplementedRequiredHooks(): array;
    public function requireHooks(array $hooks): void;
    public function implementHooks(array $hooks): void;
    public function getNotImplementedRequiredNames(): array;
    public function requireNames(array $names): void;
    public function implementNames(array $names): void;
}
