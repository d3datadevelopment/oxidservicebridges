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

namespace D3\OxidServiceBridges\Internal\Framework\Module\Setup\Bridge;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataObject\ModuleConfiguration;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\TemplateBlockModuleSettingHandler;

class TemplateBlockModuleSettingHandlerBridge implements TemplateBlockModuleSettingHandlerBridgeInterface
{
    /**
     * @var TemplateBlockModuleSettingHandler
     */
    private $templateBlockModuleSettingHandlerService;

    /**
     * @param TemplateBlockModuleSettingHandler $templateBlockModuleSettingHandlerService
     */
    public function __construct(TemplateBlockModuleSettingHandler $templateBlockModuleSettingHandlerService)
    {
        $this->templateBlockModuleSettingHandlerService = $templateBlockModuleSettingHandlerService;
    }

    public function handleOnModuleActivation(ModuleConfiguration $configuration, int $shopId)
    {
        $this->templateBlockModuleSettingHandlerService->handleOnModuleActivation($configuration, $shopId);
    }

    public function handleOnModuleDeactivation(ModuleConfiguration $configuration, int $shopId)
    {
        $this->templateBlockModuleSettingHandlerService->handleOnModuleDeactivation($configuration, $shopId);
    }
}

