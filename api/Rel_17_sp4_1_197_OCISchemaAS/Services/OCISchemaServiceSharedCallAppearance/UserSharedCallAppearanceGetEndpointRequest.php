<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the user's Shared Call Appearance endpoint setting.
 *         The response is either a UserSharedCallAppearanceGetEndpointResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceGetEndpointRequest extends ComplexType implements ComplexInterface
{
    public    $responseType         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetEndpointResponse';
    public    $name                 = 'UserSharedCallAppearanceGetEndpointRequest';
    protected $userId               = null;
    protected $accessDeviceEndpoint = null;

    public function __construct(
         $userId,
         AccessDeviceEndpointKey $accessDeviceEndpoint
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetEndpointResponse $response
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointKey $accessDeviceEndpoint = null)
    {
        if (!$accessDeviceEndpoint) return $this;
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
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
