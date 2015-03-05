<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupPolicyGetRequest14sp1.
 *         Contains the policy settings for the group.
 */
class GroupPolicyGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callingPlanAccess,
             $extensionAccess,
             $ldapIntegrationAccess,
             $voiceMessagingAccess,
             $departmentAdminUserAccess,
             $departmentAdminTrunkGroupAccess,
             $userAuthenticationAccess,
             $userGroupDirectoryAccess,
             $userProfileAccess
    ) {
        $this->callingPlanAccess               = new GroupCallingPlanAccess($callingPlanAccess);
        $this->extensionAccess                 = new GroupExtensionAccess($extensionAccess);
        $this->ldapIntegrationAccess           = new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
        $this->voiceMessagingAccess            = new GroupVoiceMessagingAccess($voiceMessagingAccess);
        $this->departmentAdminUserAccess       = new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->departmentAdminTrunkGroupAccess = new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->userAuthenticationAccess        = new GroupUserAuthenticationAccess($userAuthenticationAccess);
        $this->userGroupDirectoryAccess        = new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->userProfileAccess               = new GroupUserProfileAccess($userProfileAccess);
        $this->args                            = func_get_args();
    }

    public function setCallingPlanAccess($callingPlanAccess)
    {
        $callingPlanAccess and $this->callingPlanAccess = new GroupCallingPlanAccess($callingPlanAccess);
    }

    public function getCallingPlanAccess()
    {
        return (!$this->callingPlanAccess) ?: $this->callingPlanAccess->value();
    }

    public function setExtensionAccess($extensionAccess)
    {
        $extensionAccess and $this->extensionAccess = new GroupExtensionAccess($extensionAccess);
    }

    public function getExtensionAccess()
    {
        return (!$this->extensionAccess) ?: $this->extensionAccess->value();
    }

    public function setLdapIntegrationAccess($ldapIntegrationAccess)
    {
        $ldapIntegrationAccess and $this->ldapIntegrationAccess = new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
    }

    public function getLdapIntegrationAccess()
    {
        return (!$this->ldapIntegrationAccess) ?: $this->ldapIntegrationAccess->value();
    }

    public function setVoiceMessagingAccess($voiceMessagingAccess)
    {
        $voiceMessagingAccess and $this->voiceMessagingAccess = new GroupVoiceMessagingAccess($voiceMessagingAccess);
    }

    public function getVoiceMessagingAccess()
    {
        return (!$this->voiceMessagingAccess) ?: $this->voiceMessagingAccess->value();
    }

    public function setDepartmentAdminUserAccess($departmentAdminUserAccess)
    {
        $departmentAdminUserAccess and $this->departmentAdminUserAccess = new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
    }

    public function getDepartmentAdminUserAccess()
    {
        return (!$this->departmentAdminUserAccess) ?: $this->departmentAdminUserAccess->value();
    }

    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess)
    {
        $departmentAdminTrunkGroupAccess and $this->departmentAdminTrunkGroupAccess = new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
    }

    public function getDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->departmentAdminTrunkGroupAccess) ?: $this->departmentAdminTrunkGroupAccess->value();
    }

    public function setUserAuthenticationAccess($userAuthenticationAccess)
    {
        $userAuthenticationAccess and $this->userAuthenticationAccess = new GroupUserAuthenticationAccess($userAuthenticationAccess);
    }

    public function getUserAuthenticationAccess()
    {
        return (!$this->userAuthenticationAccess) ?: $this->userAuthenticationAccess->value();
    }

    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess)
    {
        $userGroupDirectoryAccess and $this->userGroupDirectoryAccess = new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
    }

    public function getUserGroupDirectoryAccess()
    {
        return (!$this->userGroupDirectoryAccess) ?: $this->userGroupDirectoryAccess->value();
    }

    public function setUserProfileAccess($userProfileAccess)
    {
        $userProfileAccess and $this->userProfileAccess = new GroupUserProfileAccess($userProfileAccess);
    }

    public function getUserProfileAccess()
    {
        return (!$this->userProfileAccess) ?: $this->userProfileAccess->value();
    }
}
