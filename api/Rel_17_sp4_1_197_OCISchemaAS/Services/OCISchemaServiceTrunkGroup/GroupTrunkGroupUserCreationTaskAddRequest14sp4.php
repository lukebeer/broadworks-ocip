<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationUserIdFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUserCreationSIPURIFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TrunkGroupKey $trunkGroupKey,
             $taskName,
             $userIdFormat,
             $userIdDomain,
             $populateExtension,
             $linePortFormat,
             $linePortDomain,
             $populateContact,
             $contactFormat=null,
             $contactDomain=null,
             $servicePackName=null,
             $userService=null
    ) {
        $this->trunkGroupKey     = $trunkGroupKey;
        $this->taskName          = $taskName;
        $this->userIdFormat      = $userIdFormat;
        $this->userIdDomain      = new NetAddress($userIdDomain);
        $this->populateExtension = $populateExtension;
        $this->linePortFormat    = $linePortFormat;
        $this->linePortDomain    = new NetAddress($linePortDomain);
        $this->populateContact   = $populateContact;
        $this->contactFormat     = $contactFormat;
        $this->contactDomain     = new NetAddress($contactDomain);
        $this->servicePackName   = new ServicePackName($servicePackName);
        $this->userService       = new UserService($userService);
        $this->args              = func_get_args();
    }

    public function setTrunkGroupKey($trunkGroupKey)
    {
        $trunkGroupKey and $this->trunkGroupKey = new TrunkGroupKey($trunkGroupKey);
    }

    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->value();
    }

    public function setTaskName($taskName)
    {
        $taskName and $this->taskName = new TrunkGroupUserCreationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }

    public function setUserIdFormat($userIdFormat)
    {
        $userIdFormat and $this->userIdFormat = new TrunkGroupUserCreationUserIdFormat($userIdFormat);
    }

    public function getUserIdFormat()
    {
        return (!$this->userIdFormat) ?: $this->userIdFormat->value();
    }

    public function setUserIdDomain($userIdDomain)
    {
        $userIdDomain and $this->userIdDomain = new NetAddress($userIdDomain);
    }

    public function getUserIdDomain()
    {
        return (!$this->userIdDomain) ?: $this->userIdDomain->value();
    }

    public function setPopulateExtension($populateExtension)
    {
        $populateExtension and $this->populateExtension = new xs:boolean($populateExtension);
    }

    public function getPopulateExtension()
    {
        return (!$this->populateExtension) ?: $this->populateExtension->value();
    }

    public function setLinePortFormat($linePortFormat)
    {
        $linePortFormat and $this->linePortFormat = new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
    }

    public function getLinePortFormat()
    {
        return (!$this->linePortFormat) ?: $this->linePortFormat->value();
    }

    public function setLinePortDomain($linePortDomain)
    {
        $linePortDomain and $this->linePortDomain = new NetAddress($linePortDomain);
    }

    public function getLinePortDomain()
    {
        return (!$this->linePortDomain) ?: $this->linePortDomain->value();
    }

    public function setPopulateContact($populateContact)
    {
        $populateContact and $this->populateContact = new xs:boolean($populateContact);
    }

    public function getPopulateContact()
    {
        return (!$this->populateContact) ?: $this->populateContact->value();
    }

    public function setContactFormat($contactFormat)
    {
        $contactFormat and $this->contactFormat = new TrunkGroupUserCreationSIPURIFormat($contactFormat);
    }

    public function getContactFormat()
    {
        return (!$this->contactFormat) ?: $this->contactFormat->value();
    }

    public function setContactDomain($contactDomain)
    {
        $contactDomain and $this->contactDomain = new NetAddress($contactDomain);
    }

    public function getContactDomain()
    {
        return (!$this->contactDomain) ?: $this->contactDomain->value();
    }

    public function setServicePackName($servicePackName)
    {
        $servicePackName and $this->servicePackName = new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setUserService($userService)
    {
        $userService and $this->userService = new UserService($userService);
    }

    public function getUserService()
    {
        return (!$this->userService) ?: $this->userService->value();
    }
}
