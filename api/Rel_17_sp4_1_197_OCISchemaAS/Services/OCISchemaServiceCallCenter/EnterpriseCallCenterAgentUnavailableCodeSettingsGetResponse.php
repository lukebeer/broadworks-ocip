<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest.
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                            = 'EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse';
    protected $enableAgentUnavailableCodes                     = null;
    protected $defaultAgentUnavailableCodeOnDND                = null;
    protected $defaultAgentUnavailableCodeOnPersonalCalls      = null;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces = null;
    protected $forceUseOfAgentUnavailableCodes                 = null;
    protected $defaultAgentUnavailableCode                     = null;

    /**
     * @return EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        if (!$enableAgentUnavailableCodes) return $this;
        $this->enableAgentUnavailableCodes = new PrimitiveType($enableAgentUnavailableCodes);
        $this->enableAgentUnavailableCodes->setName('enableAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableAgentUnavailableCodes()
    {
        return $this->enableAgentUnavailableCodes->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        if (!$defaultAgentUnavailableCodeOnDND) return $this;
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnDND->setName('defaultAgentUnavailableCodeOnDND');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        if (!$defaultAgentUnavailableCodeOnPersonalCalls) return $this;
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnPersonalCalls->setName('defaultAgentUnavailableCodeOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        if (!$defaultAgentUnavailableCodeOnConsecutiveBounces) return $this;
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces->setName('defaultAgentUnavailableCodeOnConsecutiveBounces');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getValue();
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        if (!$forceUseOfAgentUnavailableCodes) return $this;
        $this->forceUseOfAgentUnavailableCodes = new PrimitiveType($forceUseOfAgentUnavailableCodes);
        $this->forceUseOfAgentUnavailableCodes->setName('forceUseOfAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return $this->forceUseOfAgentUnavailableCodes->getValue();
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        if (!$defaultAgentUnavailableCode) return $this;
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->defaultAgentUnavailableCode->setName('defaultAgentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode->getValue();
    }
}
