<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemZoneCallingRestrictionsZoneGetListRequest. 
 * 	Contains a table of all the zones in the system. The column headings are "Zone Name" , "Physical Location".
 *         Replaced by: SystemZoneGetListResponse
 */
class SystemZoneCallingRestrictionsZoneGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemZoneCallingRestrictionsZoneGetListResponse';
    protected $zoneTable = null;

    /**
     * @return SystemZoneCallingRestrictionsZoneGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setZoneTable(TableType $zoneTable = null)
    {
        if (!$zoneTable) return $this;
        $this->zoneTable = $zoneTable;
        $this->zoneTable->setName('zoneTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getZoneTable()
    {
        return $this->zoneTable;
    }
}
