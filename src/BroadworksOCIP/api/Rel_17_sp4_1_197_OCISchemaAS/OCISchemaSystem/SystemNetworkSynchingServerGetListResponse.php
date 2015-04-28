<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Description".
 */
class SystemNetworkSynchingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkSynchingServerGetListResponse';
    protected $preferredNetworkServerNetAddress;
    protected $networkSynchingServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkSynchingServerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress = null)
    {
        $this->preferredNetworkServerNetAddress = ($preferredNetworkServerNetAddress InstanceOf NetAddress)
             ? $preferredNetworkServerNetAddress
             : new NetAddress($preferredNetworkServerNetAddress);
        $this->preferredNetworkServerNetAddress->setElementName('preferredNetworkServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $preferredNetworkServerNetAddress
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return ($this->preferredNetworkServerNetAddress)
            ? $this->preferredNetworkServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkSynchingServerTable(TableType $networkSynchingServerTable = null)
    {
        $this->networkSynchingServerTable = $networkSynchingServerTable;
        $this->networkSynchingServerTable->setElementName('networkSynchingServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkSynchingServerTable()
    {
        return $this->networkSynchingServerTable;
    }
}
