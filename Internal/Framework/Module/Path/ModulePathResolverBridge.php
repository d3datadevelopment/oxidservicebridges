<?php

declare(strict_types=1);

namespace D3\OxidServicesBridges\Internal\Framework\Module\Path;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Path\ModulePathResolverInterface;

class ModulePathResolverBridge implements ModulePathResolverBridgeInterface
{
    /**
     * @var ModulePathResolverInterface
     */
    private $modulePathResolver;

    public function __construct(
        ModulePathResolverInterface $modulePathResolver
    ) {
        $this->modulePathResolver = $modulePathResolver;
    }

    /**
     * @param string $moduleId
     * @param int $shopId
     * @return string
     */
    public function getFullModulePathFromConfiguration(string $moduleId, int $shopId): string
    {
        return $this->modulePathResolver->getFullModulePathFromConfiguration($moduleId, $shopId);
    }
}