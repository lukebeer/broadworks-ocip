<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAuthentication; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserAuthenticationGetRequest.
 */
class UserAuthenticationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAuthenticationGetResponse';
    protected $userName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAuthentication\UserAuthenticationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf SIPAuthenticationUserName)
             ? $userName
             : new SIPAuthenticationUserName($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName)
            ? $this->userName->getElementValue()
            : null;
    }
}
