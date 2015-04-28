<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest.
 *         Contains a table with column headings: "Portal Name", "Phone Number", "Extension", "Language".
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksAnywhereGetAvailablePortalListResponse';
    protected $portalTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\UserBroadWorksAnywhereGetAvailablePortalListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPortalTable(TableType $portalTable = null)
    {
        $this->portalTable = $portalTable;
        $this->portalTable->setElementName('portalTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPortalTable()
    {
        return $this->portalTable;
    }
}
