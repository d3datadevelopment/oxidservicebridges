<?php

declare(strict_types=1);

namespace D3\OxidServicesBridges\Internal\Framework\Module\Path;

interface ModulePathResolverBridgeInterface
{
    /**
     * @param string $moduleId
     * @param int $shopId
     * @return string
     */
    public function getFullModulePathFromConfiguration(string $moduleId, int $shopId): string;
}