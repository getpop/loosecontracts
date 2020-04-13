<?php

declare(strict_types=1);

namespace PoP\LooseContracts;

class LooseContractManager implements LooseContractManagerInterface
{
    protected $requiredHooks = [];
    protected $implementedHooks = [];
    protected $requiredNames = [];
    protected $implementedNames = [];

    public function getNotImplementedRequiredHooks(): array
    {
        return array_diff(
            $this->requiredHooks,
            $this->implementedHooks
        );
    }

    public function requireHooks(array $hooks): void
    {
        $this->requiredHooks = array_merge(
            $this->requiredHooks,
            $hooks
        );
    }

    public function implementHooks(array $hooks): void
    {
        $this->implementedHooks = array_merge(
            $this->implementedHooks,
            $hooks
        );
    }

    public function getNotImplementedRequiredNames(): array
    {
        return array_diff(
            $this->requiredNames,
            $this->implementedNames
        );
    }

    public function requireNames(array $names): void
    {
        $this->requiredNames = array_merge(
            $this->requiredNames,
            $names
        );
    }

    public function implementNames(array $names): void
    {
        $this->implementedNames = array_merge(
            $this->implementedNames,
            $names
        );
    }
}
