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
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 */
class SystemServiceActivationAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemServiceActivationAccessCodeGetResponse';
    protected $isActive;
    protected $terminatingAccessCode;
    protected $redirectingAccessCode;
    protected $clickToDialAccessCode;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceActivationAccessCodeGetResponse $response
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
    public function setTerminatingAccessCode($terminatingAccessCode = null)
    {
        $this->terminatingAccessCode = ($terminatingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $terminatingAccessCode
             : new ServiceActivationAccessCode($terminatingAccessCode);
        $this->terminatingAccessCode->setElementName('terminatingAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $terminatingAccessCode
     */
    public function getTerminatingAccessCode()
    {
        return ($this->terminatingAccessCode)
            ? $this->terminatingAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingAccessCode($redirectingAccessCode = null)
    {
        $this->redirectingAccessCode = ($redirectingAccessCode InstanceOf ServiceActivationAccessCode)
             ? $redirectingAccessCode
             : new ServiceActivationAccessCode($redirectingAccessCode);
        $this->redirectingAccessCode->setElementName('redirectingAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $redirectingAccessCode
     */
    public function getRedirectingAccessCode()
    {
        return ($this->redirectingAccessCode)
            ? $this->redirectingAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setClickToDialAccessCode($clickToDialAccessCode = null)
    {
        $this->clickToDialAccessCode = ($clickToDialAccessCode InstanceOf ServiceActivationAccessCode)
             ? $clickToDialAccessCode
             : new ServiceActivationAccessCode($clickToDialAccessCode);
        $this->clickToDialAccessCode->setElementName('clickToDialAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceActivationAccessCode $clickToDialAccessCode
     */
    public function getClickToDialAccessCode()
    {
        return ($this->clickToDialAccessCode)
            ? $this->clickToDialAccessCode->getElementValue()
            : null;
    }
}
