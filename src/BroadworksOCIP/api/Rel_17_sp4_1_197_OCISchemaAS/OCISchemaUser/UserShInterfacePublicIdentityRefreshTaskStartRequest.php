<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PublicUserIdentity;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Dispatches a Public Identity refresh task on the local Application Server node for the specified public identity.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserShInterfacePublicIdentityRefreshTaskStartRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserShInterfacePublicIdentityRefreshTaskStartRequest';
    protected $publicUserIdentity;

    public function __construct(
         $publicUserIdentity = ''
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
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
    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
        $this->publicUserIdentity = ($publicUserIdentity InstanceOf PublicUserIdentity)
             ? $publicUserIdentity
             : new PublicUserIdentity($publicUserIdentity);
        $this->publicUserIdentity->setElementName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return PublicUserIdentity $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }
}
