<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallCenterGetAvailableDNISListRequest.
 *         Contains a list of available DNIS for agent to select.
 */
class UserCallCenterGetAvailableDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterGetAvailableDNISListResponse';
    protected $availableDNIS;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterGetAvailableDNISListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableDNIS(DNISKey $availableDNIS = null)
    {
        $this->availableDNIS = ($availableDNIS InstanceOf DNISKey)
             ? $availableDNIS
             : new DNISKey($availableDNIS);
        $this->availableDNIS->setElementName('availableDNIS');
        return $this;
    }

    /**
     * 
     * @return DNISKey $availableDNIS
     */
    public function getAvailableDNIS()
    {
        return $this->availableDNIS;
    }
}
