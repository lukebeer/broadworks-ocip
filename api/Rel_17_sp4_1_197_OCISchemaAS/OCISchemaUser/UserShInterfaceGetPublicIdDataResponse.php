<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IMSUserState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserShInterfaceGetPublicIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 */
class UserShInterfaceGetPublicIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'UserShInterfaceGetPublicIdDataResponse';
    protected $userId       = null;
    protected $userType     = null;
    protected $endpointType = null;
    protected $SCSCFName    = null;
    protected $IMSUserState = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetPublicIdDataResponse $response
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
    public function setUserType($userType = null)
    {
        if (!$userType) return $this;
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
        $this->userType->setName('userType');
        return $this;
    }

    /**
     * 
     * @return UserType $userType
     */
    public function getUserType()
    {
        return $this->userType->getValue();
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        if (!$endpointType) return $this;
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
        $this->endpointType->setName('endpointType');
        return $this;
    }

    /**
     * 
     * @return EndpointType $endpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType->getValue();
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        if (!$SCSCFName) return $this;
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
        $this->SCSCFName->setName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SIPURI $SCSCFName
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName->getValue();
    }

    /**
     * 
     */
    public function setIMSUserState($IMSUserState = null)
    {
        if (!$IMSUserState) return $this;
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
        $this->IMSUserState->setName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return IMSUserState $IMSUserState
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState->getValue();
    }
}
