<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Specifies an agent's login state (availability) for a particular Call Center.
 */
class CallCenterAgentAvailability extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterAgentAvailability';
    protected $serviceUserId;
    protected $available;

    public function __construct(
         $serviceUserId = '',
         $available = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setAvailable($available);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setAvailable($available = null)
    {
        $this->available = new PrimitiveType($available);
        $this->available->setName('available');
        return $this;
    }

    /**
     * 
     * @return boolean $available
     */
    public function getAvailable()
    {
        return ($this->available) ? $this->available->getValue() : null;
    }
}
