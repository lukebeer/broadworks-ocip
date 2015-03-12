<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'SystemRoutingGetTranslationListResponse';
    protected $routingTable = null;

    /**
     * @return SystemRoutingGetTranslationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingTable(TableType $routingTable = null)
    {
        if (!$routingTable) return $this;
        $this->routingTable = $routingTable;
        $this->routingTable->setName('routingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutingTable()
    {
        return $this->routingTable->getValue();
    }
}
