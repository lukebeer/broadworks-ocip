<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Call Center Agent Unavailable Code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseCallCenterAgentUnavailableCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseCallCenterAgentUnavailableCodeModifyRequest';
    protected $serviceProviderId;
    protected $code;
    protected $isActive;
    protected $description;

    public function __construct(
         $serviceProviderId = '',
         $code = '',
         $isActive = null,
         $description = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCode($code);
        $this->setIsActive($isActive);
        $this->setDescription($description);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf CallCenterAgentUnavailableCode)
             ? $code
             : new CallCenterAgentUnavailableCode($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $code
     */
    public function getCode()
    {
        return ($this->code) ? $this->code->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterAgentUnavailableCodeDescription)
             ? $description
             : new CallCenterAgentUnavailableCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
