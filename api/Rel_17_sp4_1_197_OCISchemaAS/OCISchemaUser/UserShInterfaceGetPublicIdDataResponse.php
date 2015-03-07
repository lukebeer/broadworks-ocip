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


/**
 * Response to the UserShInterfaceGetPublicIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 */
class UserShInterfaceGetPublicIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userId        = null;
    protected $userType      = null;
    protected $endpointType  = null;
    protected $SCSCFName     = null;
    protected $IMSUserState  = null;


    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setUserType($userType = null)
    {
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
    }

    public function getUserType()
    {
        return (!$this->userType) ?: $this->userType->value();
    }

    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
    }

    public function getEndpointType()
    {
        return (!$this->endpointType) ?: $this->endpointType->value();
    }

    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
    }

    public function getSCSCFName()
    {
        return (!$this->SCSCFName) ?: $this->SCSCFName->value();
    }

    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
    }

    public function getIMSUserState()
    {
        return (!$this->IMSUserState) ?: $this->IMSUserState->value();
    }
}
