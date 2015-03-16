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
 * Disassociate one or more of a user's Shared Call Appearance endpoints.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceDeleteEndpointListRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSharedCallAppearanceDeleteEndpointListRequest14';
    protected $userId;
    protected $accessDeviceEndpoint;

    public function __construct(
         $userId = '',
         AccessDeviceEndpointKey $accessDeviceEndpoint = null
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointKey $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointKey)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointKey($accessDeviceEndpoint);
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
