<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 */
class UserCallCenterAgentDetailsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = 'UserCallCenterAgentDetailsGetResponse';
    protected $isCallCenterBasicAssigned    = null;
    protected $isCallCenterStandardAssigned = null;
    protected $isCallCenterPremiumAssigned  = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterAgentDetailsGetResponse $response
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
        if (!$isCallCenterBasicAssigned) return $this;
        $this->isCallCenterBasicAssigned = new PrimitiveType($isCallCenterBasicAssigned);
        $this->isCallCenterBasicAssigned->setName('isCallCenterBasicAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterBasicAssigned
     */
    public function getIsCallCenterBasicAssigned()
    {
        return $this->isCallCenterBasicAssigned->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned = null)
    {
        if (!$isCallCenterStandardAssigned) return $this;
        $this->isCallCenterStandardAssigned = new PrimitiveType($isCallCenterStandardAssigned);
        $this->isCallCenterStandardAssigned->setName('isCallCenterStandardAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterStandardAssigned
     */
    public function getIsCallCenterStandardAssigned()
    {
        return $this->isCallCenterStandardAssigned->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned = null)
    {
        if (!$isCallCenterPremiumAssigned) return $this;
        $this->isCallCenterPremiumAssigned = new PrimitiveType($isCallCenterPremiumAssigned);
        $this->isCallCenterPremiumAssigned->setName('isCallCenterPremiumAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isCallCenterPremiumAssigned
     */
    public function getIsCallCenterPremiumAssigned()
    {
        return $this->isCallCenterPremiumAssigned->getValue();
    }
}
