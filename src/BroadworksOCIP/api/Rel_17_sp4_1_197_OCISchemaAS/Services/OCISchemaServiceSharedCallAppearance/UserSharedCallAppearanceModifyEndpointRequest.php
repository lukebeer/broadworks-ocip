<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Associate/Disassociate an access device instance to the user's Shared Call Appearance.
 *          The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSharedCallAppearanceModifyEndpointRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSharedCallAppearanceModifyEndpointRequest';
    protected $userId;
    protected $accessDeviceEndpoint;
    protected $isActive;
    protected $allowOrigination;
    protected $allowTermination;

    public function __construct(
         $userId = '',
         $accessDeviceEndpoint = '',
         $isActive = null,
         $allowOrigination = null,
         $allowTermination = null
    ) {
        $this->setUserId($userId);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setIsActive($isActive);
        $this->setAllowOrigination($allowOrigination);
        $this->setAllowTermination($allowTermination);
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

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        $this->allowOrigination = new PrimitiveType($allowOrigination);
        $this->allowOrigination->setElementName('allowOrigination');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOrigination
     */
    public function getAllowOrigination()
    {
        return ($this->allowOrigination)
            ? $this->allowOrigination->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        $this->allowTermination = new PrimitiveType($allowTermination);
        $this->allowTermination->setElementName('allowTermination');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTermination
     */
    public function getAllowTermination()
    {
        return ($this->allowTermination)
            ? $this->allowTermination->getElementValue()
            : null;
    }
}
