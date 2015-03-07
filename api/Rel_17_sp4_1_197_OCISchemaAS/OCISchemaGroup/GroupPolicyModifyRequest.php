<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the policies for a Group.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $serviceProviderId                          = null;
    protected $groupId                                    = null;
    protected $callingPlanAccess                          = null;
    protected $extensionAccess                            = null;
    protected $ldapIntegrationAccess                      = null;
    protected $voiceMessagingAccess                       = null;
    protected $departmentAdminUserAccess                  = null;
    protected $departmentAdminTrunkGroupAccess            = null;
    protected $departmentAdminPhoneNumberExtensionAccess  = null;
    protected $departmentAdminCallingLineIdNumberAccess   = null;
    protected $userAuthenticationAccess                   = null;
    protected $userGroupDirectoryAccess                   = null;
    protected $userProfileAccess                          = null;
    protected $userEnhancedCallLogAccess                  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $callingPlanAccess = null,
         $extensionAccess = null,
         $ldapIntegrationAccess = null,
         $voiceMessagingAccess = null,
         $departmentAdminUserAccess = null,
         $departmentAdminTrunkGroupAccess = null,
         $departmentAdminPhoneNumberExtensionAccess = null,
         $departmentAdminCallingLineIdNumberAccess = null,
         $userAuthenticationAccess = null,
         $userGroupDirectoryAccess = null,
         $userProfileAccess = null,
         $userEnhancedCallLogAccess = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCallingPlanAccess($callingPlanAccess);
        $this->setExtensionAccess($extensionAccess);
        $this->setLdapIntegrationAccess($ldapIntegrationAccess);
        $this->setVoiceMessagingAccess($voiceMessagingAccess);
        $this->setDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
        $this->setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
        $this->setUserAuthenticationAccess($userAuthenticationAccess);
        $this->setUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->setUserProfileAccess($userProfileAccess);
        $this->setUserEnhancedCallLogAccess($userEnhancedCallLogAccess);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setCallingPlanAccess($callingPlanAccess = null)
    {
        $this->callingPlanAccess = ($callingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $callingPlanAccess
             : new GroupCallingPlanAccess($callingPlanAccess);
    }

    public function getCallingPlanAccess()
    {
        return (!$this->callingPlanAccess) ?: $this->callingPlanAccess->value();
    }

    public function setExtensionAccess($extensionAccess = null)
    {
        $this->extensionAccess = ($extensionAccess InstanceOf GroupExtensionAccess)
             ? $extensionAccess
             : new GroupExtensionAccess($extensionAccess);
    }

    public function getExtensionAccess()
    {
        return (!$this->extensionAccess) ?: $this->extensionAccess->value();
    }

    public function setLdapIntegrationAccess($ldapIntegrationAccess = null)
    {
        $this->ldapIntegrationAccess = ($ldapIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $ldapIntegrationAccess
             : new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
    }

    public function getLdapIntegrationAccess()
    {
        return (!$this->ldapIntegrationAccess) ?: $this->ldapIntegrationAccess->value();
    }

    public function setVoiceMessagingAccess($voiceMessagingAccess = null)
    {
        $this->voiceMessagingAccess = ($voiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $voiceMessagingAccess
             : new GroupVoiceMessagingAccess($voiceMessagingAccess);
    }

    public function getVoiceMessagingAccess()
    {
        return (!$this->voiceMessagingAccess) ?: $this->voiceMessagingAccess->value();
    }

    public function setDepartmentAdminUserAccess($departmentAdminUserAccess = null)
    {
        $this->departmentAdminUserAccess = ($departmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $departmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
    }

    public function getDepartmentAdminUserAccess()
    {
        return (!$this->departmentAdminUserAccess) ?: $this->departmentAdminUserAccess->value();
    }

    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess = null)
    {
        $this->departmentAdminTrunkGroupAccess = ($departmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $departmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
    }

    public function getDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->departmentAdminTrunkGroupAccess) ?: $this->departmentAdminTrunkGroupAccess->value();
    }

    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess = null)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = ($departmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $departmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
    }

    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return (!$this->departmentAdminPhoneNumberExtensionAccess) ?: $this->departmentAdminPhoneNumberExtensionAccess->value();
    }

    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess = null)
    {
        $this->departmentAdminCallingLineIdNumberAccess = ($departmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $departmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
    }

    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return (!$this->departmentAdminCallingLineIdNumberAccess) ?: $this->departmentAdminCallingLineIdNumberAccess->value();
    }

    public function setUserAuthenticationAccess($userAuthenticationAccess = null)
    {
        $this->userAuthenticationAccess = ($userAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $userAuthenticationAccess
             : new GroupUserAuthenticationAccess($userAuthenticationAccess);
    }

    public function getUserAuthenticationAccess()
    {
        return (!$this->userAuthenticationAccess) ?: $this->userAuthenticationAccess->value();
    }

    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess = null)
    {
        $this->userGroupDirectoryAccess = ($userGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $userGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
    }

    public function getUserGroupDirectoryAccess()
    {
        return (!$this->userGroupDirectoryAccess) ?: $this->userGroupDirectoryAccess->value();
    }

    public function setUserProfileAccess($userProfileAccess = null)
    {
        $this->userProfileAccess = ($userProfileAccess InstanceOf GroupUserProfileAccess)
             ? $userProfileAccess
             : new GroupUserProfileAccess($userProfileAccess);
    }

    public function getUserProfileAccess()
    {
        return (!$this->userProfileAccess) ?: $this->userProfileAccess->value();
    }

    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess = null)
    {
        $this->userEnhancedCallLogAccess = ($userEnhancedCallLogAccess InstanceOf GroupUserCallLogAccess)
             ? $userEnhancedCallLogAccess
             : new GroupUserCallLogAccess($userEnhancedCallLogAccess);
    }

    public function getUserEnhancedCallLogAccess()
    {
        return (!$this->userEnhancedCallLogAccess) ?: $this->userEnhancedCallLogAccess->value();
    }
}
