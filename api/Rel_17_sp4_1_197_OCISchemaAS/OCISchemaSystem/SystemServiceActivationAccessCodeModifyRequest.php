<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServiceActivationAccessCode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Service Activation Access Code system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceActivationAccessCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemServiceActivationAccessCodeModifyRequest';
    protected $isActive              = null;
    protected $terminatingAccessCode = null;
    protected $redirectingAccessCode = null;
    protected $clickToDialAccessCode = null;

    public function __construct(
         $isActive = null,
         $terminatingAccessCode = null,
         $redirectingAccessCode = null,
         $clickToDialAccessCode = null
    ) {
        $this->setIsActive($isActive);
        $this->setTerminatingAccessCode($terminatingAccessCode);
        $this->setRedirectingAccessCode($redirectingAccessCode);
        $this->setClickToDialAccessCode($clickToDialAccessCode);
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
    public function setTerminatingAccessCode($terminatingAccessCode = null)
    {
        if (!$terminatingAccessCode) return $this;
        $this->terminatingAccessCode = ($terminatingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $terminatingAccessCode
             : new ServiceActivationAccessCode($terminatingAccessCode);
        $this->terminatingAccessCode->setName('terminatingAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $terminatingAccessCode
     */
    public function getTerminatingAccessCode()
    {
        return $this->terminatingAccessCode->getValue();
    }

    /**
     * 
     */
    public function setRedirectingAccessCode($redirectingAccessCode = null)
    {
        if (!$redirectingAccessCode) return $this;
        $this->redirectingAccessCode = ($redirectingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $redirectingAccessCode
             : new ServiceActivationAccessCode($redirectingAccessCode);
        $this->redirectingAccessCode->setName('redirectingAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $redirectingAccessCode
     */
    public function getRedirectingAccessCode()
    {
        return $this->redirectingAccessCode->getValue();
    }

    /**
     * 
     */
    public function setClickToDialAccessCode($clickToDialAccessCode = null)
    {
        if (!$clickToDialAccessCode) return $this;
        $this->clickToDialAccessCode = ($clickToDialAccessCode InstanceOf ServiceActivationAccessCode)
             ? $clickToDialAccessCode
             : new ServiceActivationAccessCode($clickToDialAccessCode);
        $this->clickToDialAccessCode->setName('clickToDialAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $clickToDialAccessCode
     */
    public function getClickToDialAccessCode()
    {
        return $this->clickToDialAccessCode->getValue();
    }
}
