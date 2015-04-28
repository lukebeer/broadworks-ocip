<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a 4 column table with column headings 'Instance', 'Realm', 'ApplicationID', and 'Default'.  One row is present for each Diameter routing realm.
 */
class SystemBwDiameterRoutingRealmGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBwDiameterRoutingRealmGetListResponse';
    protected $routingRealmTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterRoutingRealmGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingRealmTable(TableType $routingRealmTable = null)
    {
        $this->routingRealmTable = $routingRealmTable;
        $this->routingRealmTable->setElementName('routingRealmTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutingRealmTable()
    {
        return $this->routingRealmTable;
    }
}
