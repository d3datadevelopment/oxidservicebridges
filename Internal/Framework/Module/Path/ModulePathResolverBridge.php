<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

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