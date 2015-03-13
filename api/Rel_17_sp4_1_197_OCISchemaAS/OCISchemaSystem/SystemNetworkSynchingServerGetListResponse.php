<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Description".
 */
class SystemNetworkSynchingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = 'SystemNetworkSynchingServerGetListResponse';
    protected $preferredNetworkServerNetAddress = null;
    protected $networkSynchingServerTable       = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkSynchingServerGetListResponse $response
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
        if (!$preferredNetworkServerNetAddress) return $this;
        $this->preferredNetworkServerNetAddress = ($preferredNetworkServerNetAddress InstanceOf NetAddress)
             ? $preferredNetworkServerNetAddress
             : new NetAddress($preferredNetworkServerNetAddress);
        $this->preferredNetworkServerNetAddress->setName('preferredNetworkServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $preferredNetworkServerNetAddress
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return $this->preferredNetworkServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setNetworkSynchingServerTable(TableType $networkSynchingServerTable = null)
    {
        if (!$networkSynchingServerTable) return $this;
        $this->networkSynchingServerTable = $networkSynchingServerTable;
        $this->networkSynchingServerTable->setName('networkSynchingServerTable');
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
