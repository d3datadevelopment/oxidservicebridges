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

interface ShopTemplateCacheServiceBridgeInterface
{
    /**
     * @param int $shopId
     *
     * @return void
     */
    public function invalidateCache(int $shopId): void;
}