<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserPasswordInfoGetRequest.
 */
class UserPasswordInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPasswordInfoGetResponse';
    protected $isLoginDisabled;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPasswordInfoGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsLoginDisabled($isLoginDisabled = null)
    {
        $this->isLoginDisabled = new PrimitiveType($isLoginDisabled);
        $this->isLoginDisabled->setElementName('isLoginDisabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isLoginDisabled
     */
    public function getIsLoginDisabled()
    {
        return ($this->isLoginDisabled)
            ? $this->isLoginDisabled->getElementValue()
            : null;
    }
}
