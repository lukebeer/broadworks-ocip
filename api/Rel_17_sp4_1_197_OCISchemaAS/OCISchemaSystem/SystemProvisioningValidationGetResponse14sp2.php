<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ProvisioningValidationTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemProvisioningValidationGetRequest14sp2.
 */
class SystemProvisioningValidationGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemProvisioningValidationGetResponse14sp2';
    protected $isActive;
    protected $isNetworkServerQueryActive;
    protected $timeoutSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemProvisioningValidationGetResponse14sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive = null)
    {
        $this->isNetworkServerQueryActive = new PrimitiveType($isNetworkServerQueryActive);
        $this->isNetworkServerQueryActive->setName('isNetworkServerQueryActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isNetworkServerQueryActive
     */
    public function getIsNetworkServerQueryActive()
    {
        return ($this->isNetworkServerQueryActive) ? $this->isNetworkServerQueryActive->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ProvisioningValidationTimeoutSeconds)
             ? $timeoutSeconds
             : new ProvisioningValidationTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ProvisioningValidationTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return ($this->timeoutSeconds) ? $this->timeoutSeconds->getValue() : null;
    }
}
