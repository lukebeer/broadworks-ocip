<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointAdd;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Associate an access device instance to the user's Shared Call Appearance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceAddEndpointRequest14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserSharedCallAppearanceAddEndpointRequest14sp2';
    protected $userId               = null;
    protected $accessDeviceEndpoint = null;
    protected $isActive             = null;
    protected $allowOrigination     = null;
    protected $allowTermination     = null;

    public function __construct(
         $userId,
         AccessDeviceEndpointAdd $accessDeviceEndpoint,
         $isActive,
         $allowOrigination,
         $allowTermination
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setIsActive($isActive);
        $this->setAllowOrigination($allowOrigination);
        $this->setAllowTermination($allowTermination);
    }

    /**
     * @return 
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
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        if (!$accessDeviceEndpoint) return $this;
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointAdd
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        if (!$allowOrigination) return $this;
        $this->allowOrigination = new PrimitiveType($allowOrigination);
        $this->allowOrigination->setName('allowOrigination');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination->getValue();
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        if (!$allowTermination) return $this;
        $this->allowTermination = new PrimitiveType($allowTermination);
        $this->allowTermination->setName('allowTermination');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowTermination()
    {
        return $this->allowTermination->getValue();
    }
}
