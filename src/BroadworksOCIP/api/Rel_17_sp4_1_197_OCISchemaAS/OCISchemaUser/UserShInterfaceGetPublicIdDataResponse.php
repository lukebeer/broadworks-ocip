<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IMSUserState;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EndpointType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserShInterfaceGetPublicIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 */
class UserShInterfaceGetPublicIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserShInterfaceGetPublicIdDataResponse';
    protected $userId;
    protected $userType;
    protected $endpointType;
    protected $SCSCFName;
    protected $IMSUserState;

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
    public function setUserType($userType = null)
    {
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
        $this->userType->setElementName('userType');
        return $this;
    }

    /**
     * 
     * @return UserType $userType
     */
    public function getUserType()
    {
        return ($this->userType)
            ? $this->userType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
        $this->endpointType->setElementName('endpointType');
        return $this;
    }

    /**
     * 
     * @return EndpointType $endpointType
     */
    public function getEndpointType()
    {
        return ($this->endpointType)
            ? $this->endpointType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
        $this->SCSCFName->setElementName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SIPURI $SCSCFName
     */
    public function getSCSCFName()
    {
        return ($this->SCSCFName)
            ? $this->SCSCFName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
        $this->IMSUserState->setElementName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return IMSUserState $IMSUserState
     */
    public function getIMSUserState()
    {
        return ($this->IMSUserState)
            ? $this->IMSUserState->getElementValue()
            : null;
    }
}
