<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 */
class GroupBroadWorksMobileManagerGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksMobileManagerGetHomeZoneListResponse';
    protected $homeZonesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupBroadWorksMobileManagerGetHomeZoneListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZonesTable(TableType $homeZonesTable = null)
    {
        $this->homeZonesTable = $homeZonesTable;
        $this->homeZonesTable->setElementName('homeZonesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHomeZonesTable()
    {
        return $this->homeZonesTable;
    }
}
