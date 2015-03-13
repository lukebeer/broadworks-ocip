<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the user's Polycom Phone Services attributes.
 *         The response is either a UserPolycomPhoneServicesGetResponse or an ErrorResponse.
 */
class UserPolycomPhoneServicesGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetResponse';
    public    $name         = 'UserPolycomPhoneServicesGetRequest';
    protected $userId       = null;
    protected $accessDevice = null;

    public function __construct(
         $userId,
         AccessDevice $accessDevice
    ) {
        $this->setUserId($userId);
        $this->setAccessDevice($accessDevice);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetResponse $response
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
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        if (!$accessDevice) return $this;
        $this->accessDevice = $accessDevice;
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return AccessDevice $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }
}
