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
 * Modify the system level data associated with the Busy Lamp Field
 *         Service. The response is either a SuccessResponse or an 
 *         ErrorResponse.
 */
class SystemBusyLampFieldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBusyLampFieldModifyRequest';
    protected $displayLocalUserIdentityLastNameFirst;

    public function __construct(
         $displayLocalUserIdentityLastNameFirst = null
    ) {
        $this->setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst);
    }

    /**
     * @return mixed $response
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
