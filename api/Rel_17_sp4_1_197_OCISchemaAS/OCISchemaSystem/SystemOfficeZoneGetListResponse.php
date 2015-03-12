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
 * Response to the SystemOfficeZoneGetListRequest.
 *         The response contains a table of all Office Zones 
 *         in the system. The column headings are "Name" and "Description"
 */
class SystemOfficeZoneGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemOfficeZoneGetListResponse';
    protected $officeZoneTable = null;

    /**
     * @return SystemOfficeZoneGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOfficeZoneTable(TableType $officeZoneTable = null)
    {
        if (!$officeZoneTable) return $this;
        $this->officeZoneTable = $officeZoneTable;
        $this->officeZoneTable->setName('officeZoneTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable;
    }
}
