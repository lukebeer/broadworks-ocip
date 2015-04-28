<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeType;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAdviceOfChargeGetRequest.
 */
class UserAdviceOfChargeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAdviceOfChargeGetResponse';
    protected $isActive;
    protected $aocType;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\UserAdviceOfChargeGetResponse $response
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
    public function setAocType($aocType = null)
    {
        $this->aocType = ($aocType InstanceOf AdviceOfChargeType)
             ? $aocType
             : new AdviceOfChargeType($aocType);
        $this->aocType->setElementName('aocType');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeType $aocType
     */
    public function getAocType()
    {
        return ($this->aocType)
            ? $this->aocType->getElementValue()
            : null;
    }
}
