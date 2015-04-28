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
 * Returns the Sh non-transparent data stored against a Public User Identity (a SIP URI
 *         or TEL URI).
 *         The response is either a UserShInterfaceGetPublicIdDataResponse or an ErrorResponse.
 */
class UserShInterfaceGetPublicIdDataRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetPublicIdDataResponse';
    public    $elementName = 'UserShInterfaceGetPublicIdDataRequest';
    protected $publicUserIdentity;

    public function __construct(
         $publicUserIdentity = ''
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetPublicIdDataResponse $response
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
