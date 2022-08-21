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

namespace D3\OxidServiceBridges\Doctrine\DBAL;

use Doctrine\DBAL\Connection;

class ConnectionBridge implements ConnectionBridgeInterface
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(
        Connection $connection
    ) {
        $this->connection = $connection;
    }

    /**
     * @param string $moduleId
     * @param int $shopId
     * @return Connection
     */
    public function getConnection(): Connection
    {
        return $this->connection;
    }
}
