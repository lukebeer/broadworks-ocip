<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMWIDeliveryToMobileEndpoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMWIDeliveryToMobileEndpointGetRequest.
 */
class UserMWIDeliveryToMobileEndpointGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMWIDeliveryToMobileEndpointGetResponse';
    protected $isActive;
    protected $mobilePhoneNumber;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMWIDeliveryToMobileEndpoint\UserMWIDeliveryToMobileEndpointGetResponse $response
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
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $mobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return ($this->mobilePhoneNumber) ? $this->mobilePhoneNumber->getValue() : null;
    }
}
