<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServiceActivationAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceActivationAccessCodeGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 */
class SystemServiceActivationAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $isActive              = null;
    protected $terminatingAccessCode = null;
    protected $redirectingAccessCode = null;
    protected $clickToDialAccessCode = null;

    /**
     * @return SystemServiceActivationAccessCodeGetResponse
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
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function setTerminatingAccessCode($terminatingAccessCode = null)
    {
        $this->terminatingAccessCode = ($terminatingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $terminatingAccessCode
             : new ServiceActivationAccessCode($terminatingAccessCode);
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function getTerminatingAccessCode()
    {
        return (!$this->terminatingAccessCode) ?: $this->terminatingAccessCode->getValue();
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function setRedirectingAccessCode($redirectingAccessCode = null)
    {
        $this->redirectingAccessCode = ($redirectingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $redirectingAccessCode
             : new ServiceActivationAccessCode($redirectingAccessCode);
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function getRedirectingAccessCode()
    {
        return (!$this->redirectingAccessCode) ?: $this->redirectingAccessCode->getValue();
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function setClickToDialAccessCode($clickToDialAccessCode = null)
    {
        $this->clickToDialAccessCode = ($clickToDialAccessCode InstanceOf ServiceActivationAccessCode)
             ? $clickToDialAccessCode
             : new ServiceActivationAccessCode($clickToDialAccessCode);
    }

    /**
     * Access code for Service Activation Access Code System Parameters.
     */
    public function getClickToDialAccessCode()
    {
        return (!$this->clickToDialAccessCode) ?: $this->clickToDialAccessCode->getValue();
    }
}
