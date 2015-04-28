<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemZoneCallingRestrictionsZoneGetListRequest. 
 * 	Contains a table of all the zones in the system. The column headings are "Zone Name" , "Physical Location".
 *         Replaced by: SystemZoneGetListResponse
 */
class SystemZoneCallingRestrictionsZoneGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemZoneCallingRestrictionsZoneGetListResponse';
    protected $zoneTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsZoneGetListResponse $response
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
        $this->zoneTable = $zoneTable;
        $this->zoneTable->setElementName('zoneTable');
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
