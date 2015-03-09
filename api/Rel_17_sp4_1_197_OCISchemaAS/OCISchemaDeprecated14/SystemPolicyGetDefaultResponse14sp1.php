<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemPolicyGetDefaultResponse14sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPolicyGetDefaultRequest14sp1.
 *         Contains the default policy settings for the system.
 */
class SystemPolicyGetDefaultResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $groupCallingPlanAccess                         = null;
    protected $groupExtensionAccess                           = null;
    protected $groupLDAPIntegrationAccess                     = null;
    protected $groupVoiceMessagingAccess                      = null;
    protected $groupDepartmentAdminUserAccess                 = null;
    protected $groupDepartmentAdminTrunkGroupAccess           = null;
    protected $groupUserAuthenticationAccess                  = null;
    protected $groupUserGroupDirectoryAccess                  = null;
    protected $groupUserProfileAccess                         = null;
    protected $groupAdminProfileAccess                        = null;
    protected $groupAdminUserAccess                           = null;
    protected $groupAdminAdminAccess                          = null;
    protected $groupAdminDepartmentAccess                     = null;
    protected $groupAdminAccessDeviceAccess                   = null;
    protected $groupAdminEnhancedServiceInstanceAccess        = null;
    protected $groupAdminFeatureAccessCodeAccess              = null;
    protected $groupAdminPhoneNumberExtensionAccess           = null;
    protected $groupAdminServiceAccess                        = null;
    protected $groupAdminTrunkGroupAccess                     = null;
    protected $serviceProviderAdminProfileAccess              = null;
    protected $serviceProviderAdminGroupAccess                = null;
    protected $serviceProviderAdminUserAccess                 = null;
    protected $serviceProviderAdminAdminAccess                = null;
    protected $serviceProviderAdminDepartmentAccess           = null;
    protected $serviceProviderAdminAccessDeviceAccess         = null;
    protected $serviceProviderAdminPhoneNumberExtensionAccess = null;
    protected $serviceProviderAdminServiceAccess              = null;
    protected $serviceProviderAdminServicePackAccess          = null;
    protected $serviceProviderAdminWebBrandingAccess          = null;
    protected $enterpriseAdminNetworkPolicyAccess             = null;

    /**
     * @return SystemPolicyGetDefaultResponse14sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Group's policy for accessing group level and user level calling plan configuration.
     *         "Full" provides full control over the configuration of group-level and user-level calling plans.
     *         "Restricted" indicates
     *         1) not to provide access to group-level calling plan configuration,
     *         2) to provide access to only collect calls for user level incoming calling plan,
     *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
     */
    public function setGroupCallingPlanAccess($groupCallingPlanAccess = null)
    {
        $this->groupCallingPlanAccess = ($groupCallingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $groupCallingPlanAccess
             : new GroupCallingPlanAccess($groupCallingPlanAccess);
    }

    /**
     * Group's policy for accessing group level and user level calling plan configuration.
     *         "Full" provides full control over the configuration of group-level and user-level calling plans.
     *         "Restricted" indicates
     *         1) not to provide access to group-level calling plan configuration,
     *         2) to provide access to only collect calls for user level incoming calling plan,
     *         3) to provide access to only international, operator assisted, 700/900, 976, and casual calls for user level outgoing calling plan.
     */
    public function getGroupCallingPlanAccess()
    {
        return (!$this->groupCallingPlanAccess) ?: $this->groupCallingPlanAccess->getValue();
    }

    /**
     * Group's policy for accessing extension dialing configuration (i.e. - length of extensions).
     */
    public function setGroupExtensionAccess($groupExtensionAccess = null)
    {
        $this->groupExtensionAccess = ($groupExtensionAccess InstanceOf GroupExtensionAccess)
             ? $groupExtensionAccess
             : new GroupExtensionAccess($groupExtensionAccess);
    }

    /**
     * Group's policy for accessing extension dialing configuration (i.e. - length of extensions).
     */
    public function getGroupExtensionAccess()
    {
        return (!$this->groupExtensionAccess) ?: $this->groupExtensionAccess->getValue();
    }

    /**
     * Group's policy for accessing LDAP Integration configuration.
     */
    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess = null)
    {
        $this->groupLDAPIntegrationAccess = ($groupLDAPIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $groupLDAPIntegrationAccess
             : new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
    }

    /**
     * Group's policy for accessing LDAP Integration configuration.
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return (!$this->groupLDAPIntegrationAccess) ?: $this->groupLDAPIntegrationAccess->getValue();
    }

    /**
     * Group's policy for user access to his voice messaging configuration.
     *         "Full" indicates full control over the voice messaging configuration.
     *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
     *         or to forward the voice message to a designated email address is not available.
     */
    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess = null)
    {
        $this->groupVoiceMessagingAccess = ($groupVoiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $groupVoiceMessagingAccess
             : new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
    }

    /**
     * Group's policy for user access to his voice messaging configuration.
     *         "Full" indicates full control over the voice messaging configuration.
     *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
     *         or to forward the voice message to a designated email address is not available.
     */
    public function getGroupVoiceMessagingAccess()
    {
        return (!$this->groupVoiceMessagingAccess) ?: $this->groupVoiceMessagingAccess->getValue();
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
    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess = null)
    {
        $this->groupDepartmentAdminUserAccess = ($groupDepartmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $groupDepartmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
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
    public function getGroupDepartmentAdminUserAccess()
    {
        return (!$this->groupDepartmentAdminUserAccess) ?: $this->groupDepartmentAdminUserAccess->getValue();
    }

    /**
     * Group's policy for department administrator's access to trunk group configuration.
     *         "Full" indicates full access to trunk groups in the department.
     *         "None" indicates no access to trunk groups in the department.
     */
    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess = null)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = ($groupDepartmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $groupDepartmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
    }

    /**
     * Group's policy for department administrator's access to trunk group configuration.
     *         "Full" indicates full access to trunk groups in the department.
     *         "None" indicates no access to trunk groups in the department.
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->groupDepartmentAdminTrunkGroupAccess) ?: $this->groupDepartmentAdminTrunkGroupAccess->getValue();
    }

    /**
     * Group's policy for a user's access to their Authentication service configuration.
     */
    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess = null)
    {
        $this->groupUserAuthenticationAccess = ($groupUserAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $groupUserAuthenticationAccess
             : new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
    }

    /**
     * Group's policy for a user's access to their Authentication service configuration.
     */
    public function getGroupUserAuthenticationAccess()
    {
        return (!$this->groupUserAuthenticationAccess) ?: $this->groupUserAuthenticationAccess->getValue();
    }

    /**
     * Group's policy for a user's access to the group or enterprise directory.
     */
    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess = null)
    {
        $this->groupUserGroupDirectoryAccess = ($groupUserGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $groupUserGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
    }

    /**
     * Group's policy for a user's access to the group or enterprise directory.
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return (!$this->groupUserGroupDirectoryAccess) ?: $this->groupUserGroupDirectoryAccess->getValue();
    }

    /**
     * Group's policy for a user's access to his profile.
     */
    public function setGroupUserProfileAccess($groupUserProfileAccess = null)
    {
        $this->groupUserProfileAccess = ($groupUserProfileAccess InstanceOf GroupUserProfileAccess)
             ? $groupUserProfileAccess
             : new GroupUserProfileAccess($groupUserProfileAccess);
    }

    /**
     * Group's policy for a user's access to his profile.
     */
    public function getGroupUserProfileAccess()
    {
        return (!$this->groupUserProfileAccess) ?: $this->groupUserProfileAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to the group profile.
     */
    public function setGroupAdminProfileAccess($groupAdminProfileAccess = null)
    {
        $this->groupAdminProfileAccess = ($groupAdminProfileAccess InstanceOf GroupAdminProfileAccess)
             ? $groupAdminProfileAccess
             : new GroupAdminProfileAccess($groupAdminProfileAccess);
    }

    /**
     * Policy for a group administrator's access to the group profile.
     */
    public function getGroupAdminProfileAccess()
    {
        return (!$this->groupAdminProfileAccess) ?: $this->groupAdminProfileAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to user configuration.
     *         "Full" indicates full access to users in the group.
     *         "Full Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the group.
     */
    public function setGroupAdminUserAccess($groupAdminUserAccess = null)
    {
        $this->groupAdminUserAccess = ($groupAdminUserAccess InstanceOf GroupAdminUserAccess)
             ? $groupAdminUserAccess
             : new GroupAdminUserAccess($groupAdminUserAccess);
    }

    /**
     * Policy for a group administrator's access to user configuration.
     *         "Full" indicates full access to users in the group.
     *         "Full Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the group administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the group.
     */
    public function getGroupAdminUserAccess()
    {
        return (!$this->groupAdminUserAccess) ?: $this->groupAdminUserAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to group administrators and department administrators.
     */
    public function setGroupAdminAdminAccess($groupAdminAdminAccess = null)
    {
        $this->groupAdminAdminAccess = ($groupAdminAdminAccess InstanceOf GroupAdminAdminAccess)
             ? $groupAdminAdminAccess
             : new GroupAdminAdminAccess($groupAdminAdminAccess);
    }

    /**
     * Policy for a group administrator's access to group administrators and department administrators.
     */
    public function getGroupAdminAdminAccess()
    {
        return (!$this->groupAdminAdminAccess) ?: $this->groupAdminAdminAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to departments.
     *         "Full" indicates full access to departments.
     *         "Read-Only" indicates read-only access to the department list
     *         "None" indicates no access to the department list
     */
    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess = null)
    {
        $this->groupAdminDepartmentAccess = ($groupAdminDepartmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $groupAdminDepartmentAccess
             : new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
    }

    /**
     * Policy for a group administrator's access to departments.
     *         "Full" indicates full access to departments.
     *         "Read-Only" indicates read-only access to the department list
     *         "None" indicates no access to the department list
     */
    public function getGroupAdminDepartmentAccess()
    {
        return (!$this->groupAdminDepartmentAccess) ?: $this->groupAdminDepartmentAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to access devices.
     *        "Full" indicates full access to access devices.
     *        "Associate User With Device" indicates
     *          1) read-only access to devices, but
     *          2) the group administrator may associate users with devices
     *        "Read-Only" indicates read-only access to devices and user-device associations
     */
    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess = null)
    {
        $this->groupAdminAccessDeviceAccess = ($groupAdminAccessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $groupAdminAccessDeviceAccess
             : new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
    }

    /**
     * Policy for a group administrator's access to access devices.
     *        "Full" indicates full access to access devices.
     *        "Associate User With Device" indicates
     *          1) read-only access to devices, but
     *          2) the group administrator may associate users with devices
     *        "Read-Only" indicates read-only access to devices and user-device associations
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return (!$this->groupAdminAccessDeviceAccess) ?: $this->groupAdminAccessDeviceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to enhanced service instances (e.g. - instances of Auto Attendants, Call Capacity Groups,
     *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups, etc.).
     *         "Full" indicates full access to enhanced service instances.
     *         "Modify-Only" indicates
     *           1) the group administrator is restricted from adding or removing enhanced service instances, but
     *           2) may modify existing instances.
     */
    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess = null)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = ($groupAdminEnhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $groupAdminEnhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
    }

    /**
     * Policy for a group administrator's access to enhanced service instances (e.g. - instances of Auto Attendants, Call Capacity Groups,
     *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups, etc.).
     *         "Full" indicates full access to enhanced service instances.
     *         "Modify-Only" indicates
     *           1) the group administrator is restricted from adding or removing enhanced service instances, but
     *           2) may modify existing instances.
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return (!$this->groupAdminEnhancedServiceInstanceAccess) ?: $this->groupAdminEnhancedServiceInstanceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to feature access codes.
     */
    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess = null)
    {
        $this->groupAdminFeatureAccessCodeAccess = ($groupAdminFeatureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $groupAdminFeatureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
    }

    /**
     * Policy for a group administrator's access to feature access codes.
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return (!$this->groupAdminFeatureAccessCodeAccess) ?: $this->groupAdminFeatureAccessCodeAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to assigning phone numbers and extensions.
     */
    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupAdminPhoneNumberExtensionAccess = ($groupAdminPhoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $groupAdminPhoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
    }

    /**
     * Policy for a group administrator's access to assigning phone numbers and extensions.
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return (!$this->groupAdminPhoneNumberExtensionAccess) ?: $this->groupAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to assigning services to groups and users.
     */
    public function setGroupAdminServiceAccess($groupAdminServiceAccess = null)
    {
        $this->groupAdminServiceAccess = ($groupAdminServiceAccess InstanceOf GroupAdminServiceAccess)
             ? $groupAdminServiceAccess
             : new GroupAdminServiceAccess($groupAdminServiceAccess);
    }

    /**
     * Policy for a group administrator's access to assigning services to groups and users.
     */
    public function getGroupAdminServiceAccess()
    {
        return (!$this->groupAdminServiceAccess) ?: $this->groupAdminServiceAccess->getValue();
    }

    /**
     * Policy for a group administrator's access to trunk groups.
     *         "Full" indicates full access to add/modify/delete trunk groups in the group.
     *         "Full Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Full access to trunk group resources
     *         "Read-Only Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Read-only access to trunk group resources
     *         "None" indicates no access to trunk groups in the group.
     */
    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess = null)
    {
        $this->groupAdminTrunkGroupAccess = ($groupAdminTrunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $groupAdminTrunkGroupAccess
             : new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
    }

    /**
     * Policy for a group administrator's access to trunk groups.
     *         "Full" indicates full access to add/modify/delete trunk groups in the group.
     *         "Full Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Full access to trunk group resources
     *         "Read-Only Resources" indicates
     *           1) Restricted from adding or removing trunk groups, and
     *           2) Read-only access to trunk group resources
     *         "None" indicates no access to trunk groups in the group.
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return (!$this->groupAdminTrunkGroupAccess) ?: $this->groupAdminTrunkGroupAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the service provider profile information.
     */
    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess = null)
    {
        $this->serviceProviderAdminProfileAccess = ($serviceProviderAdminProfileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $serviceProviderAdminProfileAccess
             : new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the service provider profile information.
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return (!$this->serviceProviderAdminProfileAccess) ?: $this->serviceProviderAdminProfileAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing groups
     *         within the service provider.
     */
    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess = null)
    {
        $this->serviceProviderAdminGroupAccess = ($serviceProviderAdminGroupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $serviceProviderAdminGroupAccess
             : new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing groups
     *         within the service provider.
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return (!$this->serviceProviderAdminGroupAccess) ?: $this->serviceProviderAdminGroupAccess->getValue();
    }

    /**
     * Policy for a service provider administrator's access to user configuration.
     *         "Full" indicates full access to users in the service provider.
     *         "Full Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the service provider.
     */
    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess = null)
    {
        $this->serviceProviderAdminUserAccess = ($serviceProviderAdminUserAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $serviceProviderAdminUserAccess
             : new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
    }

    /**
     * Policy for a service provider administrator's access to user configuration.
     *         "Full" indicates full access to users in the service provider.
     *         "Full Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, but
     *           2) has full access to the user's profile
     *         "Read-Only Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, and
     *           2) read-only access is granted to the user's profile.
     *         "No Profile" indicates
     *           1) the service provider administrator is restricted from adding or removing users, and
     *           2) no access is granted to the user's profile.
     *         "None" indicates no access to users in the service provider.
     */
    public function getServiceProviderAdminUserAccess()
    {
        return (!$this->serviceProviderAdminUserAccess) ?: $this->serviceProviderAdminUserAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing other
     *         Service Provider Administrator's within the same service provider.
     */
    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess = null)
    {
        $this->serviceProviderAdminAdminAccess = ($serviceProviderAdminAdminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $serviceProviderAdminAdminAccess
             : new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing other
     *         Service Provider Administrator's within the same service provider.
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return (!$this->serviceProviderAdminAdminAccess) ?: $this->serviceProviderAdminAdminAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing department lists
     *         within the service provider.
     */
    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess = null)
    {
        $this->serviceProviderAdminDepartmentAccess = ($serviceProviderAdminDepartmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $serviceProviderAdminDepartmentAccess
             : new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing department lists
     *         within the service provider.
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return (!$this->serviceProviderAdminDepartmentAccess) ?: $this->serviceProviderAdminDepartmentAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing access devices.
     */
    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess = null)
    {
        $this->serviceProviderAdminAccessDeviceAccess = ($serviceProviderAdminAccessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $serviceProviderAdminAccessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing access devices.
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return (!$this->serviceProviderAdminAccessDeviceAccess) ?: $this->serviceProviderAdminAccessDeviceAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing phone numbers or
     *         extensions.
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess = null)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = ($serviceProviderAdminPhoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $serviceProviderAdminPhoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing phone numbers or
     *         extensions.
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return (!$this->serviceProviderAdminPhoneNumberExtensionAccess) ?: $this->serviceProviderAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing services.
     *         "No Authorization" was added in release 14.
     */
    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess = null)
    {
        $this->serviceProviderAdminServiceAccess = ($serviceProviderAdminServiceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceProviderAdminServiceAccess
             : new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing services.
     *         "No Authorization" was added in release 14.
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return (!$this->serviceProviderAdminServiceAccess) ?: $this->serviceProviderAdminServiceAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing service packs.
     */
    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess = null)
    {
        $this->serviceProviderAdminServicePackAccess = ($serviceProviderAdminServicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $serviceProviderAdminServicePackAccess
             : new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing service packs.
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return (!$this->serviceProviderAdminServicePackAccess) ?: $this->serviceProviderAdminServicePackAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing web branding.
     */
    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess = null)
    {
        $this->serviceProviderAdminWebBrandingAccess = ($serviceProviderAdminWebBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $serviceProviderAdminWebBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing web branding.
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return (!$this->serviceProviderAdminWebBrandingAccess) ?: $this->serviceProviderAdminWebBrandingAccess->getValue();
    }

    /**
     * This data type is applicable only for an Enterprise administrator.
     *         It specifies the Enterprise Administrator's policy for accessing network policies (e.g. - VoiceVPN).
     */
    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess = null)
    {
        $this->enterpriseAdminNetworkPolicyAccess = ($enterpriseAdminNetworkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $enterpriseAdminNetworkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
    }

    /**
     * This data type is applicable only for an Enterprise administrator.
     *         It specifies the Enterprise Administrator's policy for accessing network policies (e.g. - VoiceVPN).
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return (!$this->enterpriseAdminNetworkPolicyAccess) ?: $this->enterpriseAdminNetworkPolicyAccess->getValue();
    }
}
