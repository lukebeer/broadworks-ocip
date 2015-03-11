<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupPolicyGetRequest14sp4.
 *         Contains the policy settings for the group.
 */
class GroupPolicyGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'GroupPolicyGetResponse14sp4';
    protected $callingPlanAccess               = null;
    protected $extensionAccess                 = null;
    protected $ldapIntegrationAccess           = null;
    protected $voiceMessagingAccess            = null;
    protected $departmentAdminUserAccess       = null;
    protected $departmentAdminTrunkGroupAccess = null;
    protected $userAuthenticationAccess        = null;
    protected $userGroupDirectoryAccess        = null;
    protected $userProfileAccess               = null;
    protected $userEnhancedCallLogAccess       = null;

    /**
     * @return GroupPolicyGetResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallingPlanAccess($callingPlanAccess = null)
    {
        if (!$callingPlanAccess) return $this;
        $this->callingPlanAccess = ($callingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $callingPlanAccess
             : new GroupCallingPlanAccess($callingPlanAccess);
        $this->callingPlanAccess->setName('callingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess
     */
    public function getCallingPlanAccess()
    {
        return $this->callingPlanAccess->getValue();
    }

    /**
     * 
     */
    public function setExtensionAccess($extensionAccess = null)
    {
        if (!$extensionAccess) return $this;
        $this->extensionAccess = ($extensionAccess InstanceOf GroupExtensionAccess)
             ? $extensionAccess
             : new GroupExtensionAccess($extensionAccess);
        $this->extensionAccess->setName('extensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess
     */
    public function getExtensionAccess()
    {
        return $this->extensionAccess->getValue();
    }

    /**
     * 
     */
    public function setLdapIntegrationAccess($ldapIntegrationAccess = null)
    {
        if (!$ldapIntegrationAccess) return $this;
        $this->ldapIntegrationAccess = ($ldapIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $ldapIntegrationAccess
             : new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
        $this->ldapIntegrationAccess->setName('ldapIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess
     */
    public function getLdapIntegrationAccess()
    {
        return $this->ldapIntegrationAccess->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingAccess($voiceMessagingAccess = null)
    {
        if (!$voiceMessagingAccess) return $this;
        $this->voiceMessagingAccess = ($voiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $voiceMessagingAccess
             : new GroupVoiceMessagingAccess($voiceMessagingAccess);
        $this->voiceMessagingAccess->setName('voiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess
     */
    public function getVoiceMessagingAccess()
    {
        return $this->voiceMessagingAccess->getValue();
    }

    /**
     * 
     */
    public function setDepartmentAdminUserAccess($departmentAdminUserAccess = null)
    {
        if (!$departmentAdminUserAccess) return $this;
        $this->departmentAdminUserAccess = ($departmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $departmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->departmentAdminUserAccess->setName('departmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess
     */
    public function getDepartmentAdminUserAccess()
    {
        return $this->departmentAdminUserAccess->getValue();
    }

    /**
     * 
     */
    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess = null)
    {
        if (!$departmentAdminTrunkGroupAccess) return $this;
        $this->departmentAdminTrunkGroupAccess = ($departmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $departmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->departmentAdminTrunkGroupAccess->setName('departmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return $this->departmentAdminTrunkGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setUserAuthenticationAccess($userAuthenticationAccess = null)
    {
        if (!$userAuthenticationAccess) return $this;
        $this->userAuthenticationAccess = ($userAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $userAuthenticationAccess
             : new GroupUserAuthenticationAccess($userAuthenticationAccess);
        $this->userAuthenticationAccess->setName('userAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess
     */
    public function getUserAuthenticationAccess()
    {
        return $this->userAuthenticationAccess->getValue();
    }

    /**
     * 
     */
    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess = null)
    {
        if (!$userGroupDirectoryAccess) return $this;
        $this->userGroupDirectoryAccess = ($userGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $userGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->userGroupDirectoryAccess->setName('userGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess
     */
    public function getUserGroupDirectoryAccess()
    {
        return $this->userGroupDirectoryAccess->getValue();
    }

    /**
     * 
     */
    public function setUserProfileAccess($userProfileAccess = null)
    {
        if (!$userProfileAccess) return $this;
        $this->userProfileAccess = ($userProfileAccess InstanceOf GroupUserProfileAccess)
             ? $userProfileAccess
             : new GroupUserProfileAccess($userProfileAccess);
        $this->userProfileAccess->setName('userProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess
     */
    public function getUserProfileAccess()
    {
        return $this->userProfileAccess->getValue();
    }

    /**
     * 
     */
    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess = null)
    {
        if (!$userEnhancedCallLogAccess) return $this;
        $this->userEnhancedCallLogAccess = ($userEnhancedCallLogAccess InstanceOf GroupUserCallLogAccess)
             ? $userEnhancedCallLogAccess
             : new GroupUserCallLogAccess($userEnhancedCallLogAccess);
        $this->userEnhancedCallLogAccess->setName('userEnhancedCallLogAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserCallLogAccess
     */
    public function getUserEnhancedCallLogAccess()
    {
        return $this->userEnhancedCallLogAccess->getValue();
    }
}
