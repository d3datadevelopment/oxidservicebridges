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

namespace D3\OxidServiceBridges\Internal\Framework\Module\Cache;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Cache\InvalidateModuleCacheEventSubscriber;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Event\ModuleSetupEvent;

class InvalidateModuleCacheEventSubscriberBridge implements InvalidateModuleCacheEventSubscriberBridgeInterface
{
    /**
     * @var InvalidateModuleCacheEventSubscriber
     */
    private $eventSubscriber;

    public function __construct(
        InvalidateModuleCacheEventSubscriber $eventSubscriber
    ) {
        $this->eventSubscriber = $eventSubscriber;
    }
    
    /**
     * @param ModuleSetupEvent $event
     */
    public function invalidateModuleCache(ModuleSetupEvent $event)
    {
        $this->eventSubscriber->invalidateModuleCache($event);
    }
}