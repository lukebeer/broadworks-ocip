<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 */
class UserCallCenterAgentDetailsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterAgentDetailsGetResponse';
    protected $isCallCenterBasicAssigned;
    protected $isCallCenterStandardAssigned;
    protected $isCallCenterPremiumAssigned;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterAgentDetailsGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsCallCenterBasicAssigned($isCallCenterBasicAssigned = null)
    {
        $this->isCallCenterBasicAssigned = new PrimitiveType($isCallCenterBasicAssigned);
        $this->isCallCenterBasicAssigned->setElementName('isCallCenterBasicAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterBasicAssigned
     */
    public function getIsCallCenterBasicAssigned()
    {
        return ($this->isCallCenterBasicAssigned)
            ? $this->isCallCenterBasicAssigned->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned = null)
    {
        $this->isCallCenterStandardAssigned = new PrimitiveType($isCallCenterStandardAssigned);
        $this->isCallCenterStandardAssigned->setElementName('isCallCenterStandardAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterStandardAssigned
     */
    public function getIsCallCenterStandardAssigned()
    {
        return ($this->isCallCenterStandardAssigned)
            ? $this->isCallCenterStandardAssigned->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned = null)
    {
        $this->isCallCenterPremiumAssigned = new PrimitiveType($isCallCenterPremiumAssigned);
        $this->isCallCenterPremiumAssigned->setElementName('isCallCenterPremiumAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterPremiumAssigned
     */
    public function getIsCallCenterPremiumAssigned()
    {
        return ($this->isCallCenterPremiumAssigned)
            ? $this->isCallCenterPremiumAssigned->getElementValue()
            : null;
    }
}
