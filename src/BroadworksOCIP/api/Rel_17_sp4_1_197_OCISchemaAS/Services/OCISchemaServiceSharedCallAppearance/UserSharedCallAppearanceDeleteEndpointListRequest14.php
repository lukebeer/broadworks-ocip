<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Disassociate one or more of a user's Shared Call Appearance endpoints.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceDeleteEndpointListRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSharedCallAppearanceDeleteEndpointListRequest14';
    protected $userId;
    protected $accessDeviceEndpoint;

    public function __construct(
         $userId = '',
         $accessDeviceEndpoint = null
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointKey $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointKey)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointKey($accessDeviceEndpoint);
        $this->accessDeviceEndpoint->setElementName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointKey $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }
}
