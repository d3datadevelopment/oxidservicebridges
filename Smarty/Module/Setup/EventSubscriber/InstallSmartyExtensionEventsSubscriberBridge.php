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

namespace D3\OxidServiceBridges\Smarty\Module\Setup\EventSubscriber;

use OxidEsales\Smarty\Module\Setup\EventSubscriber\InstallSmartyExtensionEventsSubscriber;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Event\FinalizingModuleActivationEvent;

class InstallSmartyExtensionEventsSubscriberBridge implements InstallSmartyExtensionEventsSubscriberBridgeInterface
{
    /**
     * @var InstallSmartyExtensionEventsSubscriber
     */
    private $installSmartyExtensionEventsSubscriber;

    public function __construct(
        InstallSmartyExtensionEventsSubscriber $eventSubscriber
    ) {
        $this->installSmartyExtensionEventsSubscriber = $eventSubscriber;
    }

    /**
     * @param FinalizingModuleActivationEvent $event
     */
    public function handleOnModuleActivation(FinalizingModuleActivationEvent $event): void
    {
        $this->installSmartyExtensionEventsSubscriber->handleOnModuleActivation($event);
    }
}