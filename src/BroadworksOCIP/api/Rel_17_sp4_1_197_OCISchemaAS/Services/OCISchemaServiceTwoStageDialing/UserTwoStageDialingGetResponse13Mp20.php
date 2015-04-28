<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserTwoStageDialingGetRequest13Mp20.
 */
class UserTwoStageDialingGetResponse13Mp20 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserTwoStageDialingGetResponse13Mp20';
    protected $isActive;
    protected $allowActivationWithUserAddresses;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\UserTwoStageDialingGetResponse13Mp20 $response
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
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses = null)
    {
        $this->allowActivationWithUserAddresses = new PrimitiveType($allowActivationWithUserAddresses);
        $this->allowActivationWithUserAddresses->setElementName('allowActivationWithUserAddresses');
        return $this;
    }

    /**
     * 
     * @return boolean $allowActivationWithUserAddresses
     */
    public function getAllowActivationWithUserAddresses()
    {
        return ($this->allowActivationWithUserAddresses)
            ? $this->allowActivationWithUserAddresses->getElementValue()
            : null;
    }
}
