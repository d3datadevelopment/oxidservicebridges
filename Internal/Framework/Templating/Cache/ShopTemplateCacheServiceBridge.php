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

namespace D3\OxidServiceBridges\Internal\Framework\Templating\Cache;

use OxidEsales\EshopCommunity\Internal\Framework\Templating\Cache\ShopTemplateCacheServiceInterface;

class ShopTemplateCacheServiceBridge implements ShopTemplateCacheServiceBridgeInterface
{
    /**
     * @var $shopTemplateCacheService
     */
    private ShopTemplateCacheServiceInterface $shopTemplateCacheService;

    public function __construct(
        ShopTemplateCacheServiceInterface $shopTemplateCacheService
    ) {
        $this->shopTemplateCacheService = $shopTemplateCacheService;
    }

    /**
     * @param int $shopId
     *
     * @return void
     */
    public function invalidateCache(int $shopId): void
    {
        $this->shopTemplateCacheService->invalidateCache( $shopId);
    }
}