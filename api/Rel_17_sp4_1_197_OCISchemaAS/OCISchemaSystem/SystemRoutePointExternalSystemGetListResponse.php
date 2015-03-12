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
 * Response to the SystemRoutePointExternalSystemGetListRequest.
 * 
 *       Contains a table with column headings:
 *       "External System", "Description".
 */
class SystemRoutePointExternalSystemGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemRoutePointExternalSystemGetListResponse';
    protected $externalSystemTable = null;

    /**
     * @return SystemRoutePointExternalSystemGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExternalSystemTable(TableType $externalSystemTable = null)
    {
        if (!$externalSystemTable) return $this;
        $this->externalSystemTable = $externalSystemTable;
        $this->externalSystemTable->setName('externalSystemTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable;
    }
}
