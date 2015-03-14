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
    public    $name                       = 'SystemProvisioningValidationGetResponse14sp2';
    protected $isActive                   = null;
    protected $isNetworkServerQueryActive = null;
    protected $timeoutSeconds             = null;

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
        if (!$isActive) return $this;
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
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive = null)
    {
        if (!$isNetworkServerQueryActive) return $this;
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
        return $this->isNetworkServerQueryActive->getValue();
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        if (!$timeoutSeconds) return $this;
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
        return $this->timeoutSeconds->getValue();
    }
}
