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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the policies for a Group.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'GroupPolicyModifyRequest';
    protected $serviceProviderId                         = null;
    protected $groupId                                   = null;
    protected $callingPlanAccess                         = null;
    protected $extensionAccess                           = null;
    protected $ldapIntegrationAccess                     = null;
    protected $voiceMessagingAccess                      = null;
    protected $departmentAdminUserAccess                 = null;
    protected $departmentAdminTrunkGroupAccess           = null;
    protected $departmentAdminPhoneNumberExtensionAccess = null;
    protected $departmentAdminCallingLineIdNumberAccess  = null;
    protected $userAuthenticationAccess                  = null;
    protected $userGroupDirectoryAccess                  = null;
    protected $userProfileAccess                         = null;
    protected $userEnhancedCallLogAccess                 = null;

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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
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
     * @return GroupCallingPlanAccess $callingPlanAccess
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
     * @return GroupExtensionAccess $extensionAccess
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
     * @return GroupLDAPIntegrationAccess $ldapIntegrationAccess
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
     * @return GroupVoiceMessagingAccess $voiceMessagingAccess
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
     * @return GroupDepartmentAdminUserAccess $departmentAdminUserAccess
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
     * @return GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return $this->departmentAdminTrunkGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess = null)
    {
        if (!$departmentAdminPhoneNumberExtensionAccess) return $this;
        $this->departmentAdminPhoneNumberExtensionAccess = ($departmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $departmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
        $this->departmentAdminPhoneNumberExtensionAccess->setName('departmentAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminPhoneNumberExtensionAccess $departmentAdminPhoneNumberExtensionAccess
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->departmentAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess = null)
    {
        if (!$departmentAdminCallingLineIdNumberAccess) return $this;
        $this->departmentAdminCallingLineIdNumberAccess = ($departmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $departmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
        $this->departmentAdminCallingLineIdNumberAccess->setName('departmentAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminCallingLineIdNumberAccess $departmentAdminCallingLineIdNumberAccess
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->departmentAdminCallingLineIdNumberAccess->getValue();
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
     * @return GroupUserAuthenticationAccess $userAuthenticationAccess
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
     * @return GroupUserGroupDirectoryAccess $userGroupDirectoryAccess
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
     * @return GroupUserProfileAccess $userProfileAccess
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
     * @return GroupUserCallLogAccess $userEnhancedCallLogAccess
     */
    public function getUserEnhancedCallLogAccess()
    {
        return $this->userEnhancedCallLogAccess->getValue();
    }
}
