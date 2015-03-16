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
 * Request to modify the system's provisioning validation attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemProvisioningValidationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemProvisioningValidationModifyRequest';
    protected $isActive;
    protected $isNetworkServerQueryActive;
    protected $timeoutSeconds;

    public function __construct(
         $isActive = null,
         $isNetworkServerQueryActive = null,
         $timeoutSeconds = null
    ) {
        $this->setIsActive($isActive);
        $this->setIsNetworkServerQueryActive($isNetworkServerQueryActive);
        $this->setTimeoutSeconds($timeoutSeconds);
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive = null)
    {
        $this->isNetworkServerQueryActive = new PrimitiveType($isNetworkServerQueryActive);
        $this->isNetworkServerQueryActive->setElementName('isNetworkServerQueryActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isNetworkServerQueryActive
     */
    public function getIsNetworkServerQueryActive()
    {
        return ($this->isNetworkServerQueryActive)
            ? $this->isNetworkServerQueryActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ProvisioningValidationTimeoutSeconds)
             ? $timeoutSeconds
             : new ProvisioningValidationTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setElementName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ProvisioningValidationTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return ($this->timeoutSeconds)
            ? $this->timeoutSeconds->getElementValue()
            : null;
    }
}
