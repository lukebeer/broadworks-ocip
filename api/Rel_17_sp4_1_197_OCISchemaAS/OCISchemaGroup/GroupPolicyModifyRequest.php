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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupPolicyModifyResponse;
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
    public    $name                                      = __CLASS__;
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
     * @return GroupPolicyModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Group's policy for accessing group level and user level calling plan configuration.
     *         "Full" provides full control over the configuration of group-level and user-level calling plans.
     *         "Restricted" indicates
     *         1) not to provide access to group-level calling plan configuration,
     *         2) to provide access to only collect calls for user level incoming calling plan,
     *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
     */
    public function setCallingPlanAccess($callingPlanAccess = null)
    {
        $this->callingPlanAccess = ($callingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $callingPlanAccess
             : new GroupCallingPlanAccess($callingPlanAccess);
    }

    /**
     * Group's policy for accessing group level and user level calling plan configuration.
     *         "Full" provides full control over the configuration of group-level and user-level calling plans.
     *         "Restricted" indicates
     *         1) not to provide access to group-level calling plan configuration,
     *         2) to provide access to only collect calls for user level incoming calling plan,
     *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
     */
    public function getCallingPlanAccess()
    {
        return (!$this->callingPlanAccess) ?: $this->callingPlanAccess->getValue();
    }

    /**
     * Group's policy for accessing extension dialing configuration (i.e. - length of extensions).
     */
    public function setExtensionAccess($extensionAccess = null)
    {
        $this->extensionAccess = ($extensionAccess InstanceOf GroupExtensionAccess)
             ? $extensionAccess
             : new GroupExtensionAccess($extensionAccess);
    }

    /**
     * Group's policy for accessing extension dialing configuration (i.e. - length of extensions).
     */
    public function getExtensionAccess()
    {
        return (!$this->extensionAccess) ?: $this->extensionAccess->getValue();
    }

    /**
     * Group's policy for accessing LDAP Integration configuration.
     */
    public function setLdapIntegrationAccess($ldapIntegrationAccess = null)
    {
        $this->ldapIntegrationAccess = ($ldapIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $ldapIntegrationAccess
             : new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
    }

    /**
     * Group's policy for accessing LDAP Integration configuration.
     */
    public function getLdapIntegrationAccess()
    {
        return (!$this->ldapIntegrationAccess) ?: $this->ldapIntegrationAccess->getValue();
    }

    /**
     * Group's policy for user access to his voice messaging configuration.
     *         "Full" indicates full control over the voice messaging configuration.
     *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
     *         or to forward the voice message to a designated email address is not available.
     */
    public function setVoiceMessagingAccess($voiceMessagingAccess = null)
    {
        $this->voiceMessagingAccess = ($voiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $voiceMessagingAccess
             : new GroupVoiceMessagingAccess($voiceMessagingAccess);
    }

    /**
     * Group's policy for user access to his voice messaging configuration.
     *         "Full" indicates full control over the voice messaging configuration.
     *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
     *         or to forward the voice message to a designated email address is not available.
     */
    public function getVoiceMessagingAccess()
    {
        return (!$this->voiceMessagingAccess) ?: $this->voiceMessagingAccess->getValue();
    }

    /**
     * Group's policy for department administrator's access to user configuration.
     *         "Full" indicates full access to users in the department.
     *         "Read-Only Profile" indicates
     *           1) the department administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the department administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the department.
     */
    public function setDepartmentAdminUserAccess($departmentAdminUserAccess = null)
    {
        $this->departmentAdminUserAccess = ($departmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $departmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
    }

    /**
     * Group's policy for department administrator's access to user configuration.
     *         "Full" indicates full access to users in the department.
     *         "Read-Only Profile" indicates
     *           1) the department administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the department administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the department.
     */
    public function getDepartmentAdminUserAccess()
    {
        return (!$this->departmentAdminUserAccess) ?: $this->departmentAdminUserAccess->getValue();
    }

    /**
     * Group's policy for department administrator's access to trunk group configuration.
     *         "Full" indicates full access to trunk groups in the department.
     *         "None" indicates no access to trunk groups in the department.
     */
    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess = null)
    {
        $this->departmentAdminTrunkGroupAccess = ($departmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $departmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
    }

    /**
     * Group's policy for department administrator's access to trunk group configuration.
     *         "Full" indicates full access to trunk groups in the department.
     *         "None" indicates no access to trunk groups in the department.
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->departmentAdminTrunkGroupAccess) ?: $this->departmentAdminTrunkGroupAccess->getValue();
    }

    /**
     * Policy for a department administrator's access to assigning phone numbers and extensions.
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess = null)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = ($departmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $departmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
    }

    /**
     * Policy for a department administrator's access to assigning phone numbers and extensions.
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return (!$this->departmentAdminPhoneNumberExtensionAccess) ?: $this->departmentAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * Department Administrator's policy for accessing calling line id number.
     */
    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess = null)
    {
        $this->departmentAdminCallingLineIdNumberAccess = ($departmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $departmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
    }

    /**
     * Department Administrator's policy for accessing calling line id number.
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return (!$this->departmentAdminCallingLineIdNumberAccess) ?: $this->departmentAdminCallingLineIdNumberAccess->getValue();
    }

    /**
     * Group's policy for a user's access to their Authentication service configuration.
     */
    public function setUserAuthenticationAccess($userAuthenticationAccess = null)
    {
        $this->userAuthenticationAccess = ($userAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $userAuthenticationAccess
             : new GroupUserAuthenticationAccess($userAuthenticationAccess);
    }

    /**
     * Group's policy for a user's access to their Authentication service configuration.
     */
    public function getUserAuthenticationAccess()
    {
        return (!$this->userAuthenticationAccess) ?: $this->userAuthenticationAccess->getValue();
    }

    /**
     * Group's policy for a user's access to the group or enterprise directory.
     */
    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess = null)
    {
        $this->userGroupDirectoryAccess = ($userGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $userGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
    }

    /**
     * Group's policy for a user's access to the group or enterprise directory.
     */
    public function getUserGroupDirectoryAccess()
    {
        return (!$this->userGroupDirectoryAccess) ?: $this->userGroupDirectoryAccess->getValue();
    }

    /**
     * Group's policy for a user's access to his profile.
     */
    public function setUserProfileAccess($userProfileAccess = null)
    {
        $this->userProfileAccess = ($userProfileAccess InstanceOf GroupUserProfileAccess)
             ? $userProfileAccess
             : new GroupUserProfileAccess($userProfileAccess);
    }

    /**
     * Group's policy for a user's access to his profile.
     */
    public function getUserProfileAccess()
    {
        return (!$this->userProfileAccess) ?: $this->userProfileAccess->getValue();
    }

    /**
     * Policy for user to delete call logs
     */
    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess = null)
    {
        $this->userEnhancedCallLogAccess = ($userEnhancedCallLogAccess InstanceOf GroupUserCallLogAccess)
             ? $userEnhancedCallLogAccess
             : new GroupUserCallLogAccess($userEnhancedCallLogAccess);
    }

    /**
     * Policy for user to delete call logs
     */
    public function getUserEnhancedCallLogAccess()
    {
        return (!$this->userEnhancedCallLogAccess) ?: $this->userEnhancedCallLogAccess->getValue();
    }
}
