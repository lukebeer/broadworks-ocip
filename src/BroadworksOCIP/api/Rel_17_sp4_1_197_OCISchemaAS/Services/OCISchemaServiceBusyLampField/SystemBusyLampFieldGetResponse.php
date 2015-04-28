<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemBusyLampFieldGetRequest.
 */
class SystemBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBusyLampFieldGetResponse';
    protected $displayLocalUserIdentityLastNameFirst;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField\SystemBusyLampFieldGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst = null)
    {
        $this->displayLocalUserIdentityLastNameFirst = new PrimitiveType($displayLocalUserIdentityLastNameFirst);
        $this->displayLocalUserIdentityLastNameFirst->setElementName('displayLocalUserIdentityLastNameFirst');
        return $this;
    }

    /**
     * 
     * @return boolean $displayLocalUserIdentityLastNameFirst
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return ($this->displayLocalUserIdentityLastNameFirst)
            ? $this->displayLocalUserIdentityLastNameFirst->getElementValue()
            : null;
    }
}
