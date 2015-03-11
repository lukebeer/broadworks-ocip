<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPolicyGetDefaultRequest17.
 *         Contains the default policy settings for the system.
 */
class SystemPolicyGetDefaultResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                              = 'SystemPolicyGetDefaultResponse17';
    protected $groupCallingPlanAccess                            = null;
    protected $groupExtensionAccess                              = null;
    protected $groupLDAPIntegrationAccess                        = null;
    protected $groupVoiceMessagingAccess                         = null;
    protected $groupDepartmentAdminUserAccess                    = null;
    protected $groupDepartmentAdminTrunkGroupAccess              = null;
    protected $groupDepartmentAdminPhoneNumberExtensionAccess    = null;
    protected $groupDepartmentAdminCallingLineIdNumberAccess     = null;
    protected $groupUserAuthenticationAccess                     = null;
    protected $groupUserGroupDirectoryAccess                     = null;
    protected $groupUserProfileAccess                            = null;
    protected $groupUserEnhancedCallLogsAccess                   = null;
    protected $groupAdminProfileAccess                           = null;
    protected $groupAdminUserAccess                              = null;
    protected $groupAdminAdminAccess                             = null;
    protected $groupAdminDepartmentAccess                        = null;
    protected $groupAdminAccessDeviceAccess                      = null;
    protected $groupAdminEnhancedServiceInstanceAccess           = null;
    protected $groupAdminFeatureAccessCodeAccess                 = null;
    protected $groupAdminPhoneNumberExtensionAccess              = null;
    protected $groupAdminCallingLineIdNumberAccess               = null;
    protected $groupAdminServiceAccess                           = null;
    protected $groupAdminTrunkGroupAccess                        = null;
    protected $groupAdminSessionAdmissionControlAccess           = null;
    protected $groupAdminOfficeZoneAccess                        = null;
    protected $serviceProviderAdminProfileAccess                 = null;
    protected $serviceProviderAdminGroupAccess                   = null;
    protected $serviceProviderAdminUserAccess                    = null;
    protected $serviceProviderAdminAdminAccess                   = null;
    protected $serviceProviderAdminDepartmentAccess              = null;
    protected $serviceProviderAdminAccessDeviceAccess            = null;
    protected $serviceProviderAdminPhoneNumberExtensionAccess    = null;
    protected $serviceProviderAdminCallingLineIdNumberAccess     = null;
    protected $serviceProviderAdminServiceAccess                 = null;
    protected $serviceProviderAdminServicePackAccess             = null;
    protected $serviceProviderAdminSessionAdmissionControlAccess = null;
    protected $serviceProviderAdminWebBrandingAccess             = null;
    protected $serviceProviderAdminOfficeZoneAccess              = null;
    protected $enterpriseAdminNetworkPolicyAccess                = null;

    /**
     * @return SystemPolicyGetDefaultResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupCallingPlanAccess($groupCallingPlanAccess = null)
    {
        if (!$groupCallingPlanAccess) return $this;
        $this->groupCallingPlanAccess = ($groupCallingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $groupCallingPlanAccess
             : new GroupCallingPlanAccess($groupCallingPlanAccess);
        $this->groupCallingPlanAccess->setName('groupCallingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupExtensionAccess($groupExtensionAccess = null)
    {
        if (!$groupExtensionAccess) return $this;
        $this->groupExtensionAccess = ($groupExtensionAccess InstanceOf GroupExtensionAccess)
             ? $groupExtensionAccess
             : new GroupExtensionAccess($groupExtensionAccess);
        $this->groupExtensionAccess->setName('groupExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess = null)
    {
        if (!$groupLDAPIntegrationAccess) return $this;
        $this->groupLDAPIntegrationAccess = ($groupLDAPIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $groupLDAPIntegrationAccess
             : new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
        $this->groupLDAPIntegrationAccess->setName('groupLDAPIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return $this->groupLDAPIntegrationAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess = null)
    {
        if (!$groupVoiceMessagingAccess) return $this;
        $this->groupVoiceMessagingAccess = ($groupVoiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $groupVoiceMessagingAccess
             : new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
        $this->groupVoiceMessagingAccess->setName('groupVoiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess = null)
    {
        if (!$groupDepartmentAdminUserAccess) return $this;
        $this->groupDepartmentAdminUserAccess = ($groupDepartmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $groupDepartmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
        $this->groupDepartmentAdminUserAccess->setName('groupDepartmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return $this->groupDepartmentAdminUserAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess = null)
    {
        if (!$groupDepartmentAdminTrunkGroupAccess) return $this;
        $this->groupDepartmentAdminTrunkGroupAccess = ($groupDepartmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $groupDepartmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
        $this->groupDepartmentAdminTrunkGroupAccess->setName('groupDepartmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return $this->groupDepartmentAdminTrunkGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess = null)
    {
        if (!$groupDepartmentAdminPhoneNumberExtensionAccess) return $this;
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = ($groupDepartmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $groupDepartmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess);
        $this->groupDepartmentAdminPhoneNumberExtensionAccess->setName('groupDepartmentAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminPhoneNumberExtensionAccess
     */
    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->groupDepartmentAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess = null)
    {
        if (!$groupDepartmentAdminCallingLineIdNumberAccess) return $this;
        $this->groupDepartmentAdminCallingLineIdNumberAccess = ($groupDepartmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $groupDepartmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess);
        $this->groupDepartmentAdminCallingLineIdNumberAccess->setName('groupDepartmentAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminCallingLineIdNumberAccess
     */
    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->groupDepartmentAdminCallingLineIdNumberAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess = null)
    {
        if (!$groupUserAuthenticationAccess) return $this;
        $this->groupUserAuthenticationAccess = ($groupUserAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $groupUserAuthenticationAccess
             : new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
        $this->groupUserAuthenticationAccess->setName('groupUserAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess
     */
    public function getGroupUserAuthenticationAccess()
    {
        return $this->groupUserAuthenticationAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess = null)
    {
        if (!$groupUserGroupDirectoryAccess) return $this;
        $this->groupUserGroupDirectoryAccess = ($groupUserGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $groupUserGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
        $this->groupUserGroupDirectoryAccess->setName('groupUserGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupUserProfileAccess($groupUserProfileAccess = null)
    {
        if (!$groupUserProfileAccess) return $this;
        $this->groupUserProfileAccess = ($groupUserProfileAccess InstanceOf GroupUserProfileAccess)
             ? $groupUserProfileAccess
             : new GroupUserProfileAccess($groupUserProfileAccess);
        $this->groupUserProfileAccess->setName('groupUserProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess = null)
    {
        if (!$groupUserEnhancedCallLogsAccess) return $this;
        $this->groupUserEnhancedCallLogsAccess = ($groupUserEnhancedCallLogsAccess InstanceOf GroupUserCallLogAccess)
             ? $groupUserEnhancedCallLogsAccess
             : new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
        $this->groupUserEnhancedCallLogsAccess->setName('groupUserEnhancedCallLogsAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserCallLogAccess
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminProfileAccess($groupAdminProfileAccess = null)
    {
        if (!$groupAdminProfileAccess) return $this;
        $this->groupAdminProfileAccess = ($groupAdminProfileAccess InstanceOf GroupAdminProfileAccess)
             ? $groupAdminProfileAccess
             : new GroupAdminProfileAccess($groupAdminProfileAccess);
        $this->groupAdminProfileAccess->setName('groupAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess
     */
    public function getGroupAdminProfileAccess()
    {
        return $this->groupAdminProfileAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminUserAccess($groupAdminUserAccess = null)
    {
        if (!$groupAdminUserAccess) return $this;
        $this->groupAdminUserAccess = ($groupAdminUserAccess InstanceOf GroupAdminUserAccess)
             ? $groupAdminUserAccess
             : new GroupAdminUserAccess($groupAdminUserAccess);
        $this->groupAdminUserAccess->setName('groupAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminAdminAccess($groupAdminAdminAccess = null)
    {
        if (!$groupAdminAdminAccess) return $this;
        $this->groupAdminAdminAccess = ($groupAdminAdminAccess InstanceOf GroupAdminAdminAccess)
             ? $groupAdminAdminAccess
             : new GroupAdminAdminAccess($groupAdminAdminAccess);
        $this->groupAdminAdminAccess->setName('groupAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess = null)
    {
        if (!$groupAdminDepartmentAccess) return $this;
        $this->groupAdminDepartmentAccess = ($groupAdminDepartmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $groupAdminDepartmentAccess
             : new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
        $this->groupAdminDepartmentAccess->setName('groupAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess = null)
    {
        if (!$groupAdminAccessDeviceAccess) return $this;
        $this->groupAdminAccessDeviceAccess = ($groupAdminAccessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $groupAdminAccessDeviceAccess
             : new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
        $this->groupAdminAccessDeviceAccess->setName('groupAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return $this->groupAdminAccessDeviceAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess = null)
    {
        if (!$groupAdminEnhancedServiceInstanceAccess) return $this;
        $this->groupAdminEnhancedServiceInstanceAccess = ($groupAdminEnhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $groupAdminEnhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
        $this->groupAdminEnhancedServiceInstanceAccess->setName('groupAdminEnhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return $this->groupAdminEnhancedServiceInstanceAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess = null)
    {
        if (!$groupAdminFeatureAccessCodeAccess) return $this;
        $this->groupAdminFeatureAccessCodeAccess = ($groupAdminFeatureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $groupAdminFeatureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
        $this->groupAdminFeatureAccessCodeAccess->setName('groupAdminFeatureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return $this->groupAdminFeatureAccessCodeAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess = null)
    {
        if (!$groupAdminPhoneNumberExtensionAccess) return $this;
        $this->groupAdminPhoneNumberExtensionAccess = ($groupAdminPhoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $groupAdminPhoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
        $this->groupAdminPhoneNumberExtensionAccess->setName('groupAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return $this->groupAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess = null)
    {
        if (!$groupAdminCallingLineIdNumberAccess) return $this;
        $this->groupAdminCallingLineIdNumberAccess = ($groupAdminCallingLineIdNumberAccess InstanceOf GroupAdminCallingLineIdNumberAccess)
             ? $groupAdminCallingLineIdNumberAccess
             : new GroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess);
        $this->groupAdminCallingLineIdNumberAccess->setName('groupAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminCallingLineIdNumberAccess
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return $this->groupAdminCallingLineIdNumberAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminServiceAccess($groupAdminServiceAccess = null)
    {
        if (!$groupAdminServiceAccess) return $this;
        $this->groupAdminServiceAccess = ($groupAdminServiceAccess InstanceOf GroupAdminServiceAccess)
             ? $groupAdminServiceAccess
             : new GroupAdminServiceAccess($groupAdminServiceAccess);
        $this->groupAdminServiceAccess->setName('groupAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess = null)
    {
        if (!$groupAdminTrunkGroupAccess) return $this;
        $this->groupAdminTrunkGroupAccess = ($groupAdminTrunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $groupAdminTrunkGroupAccess
             : new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
        $this->groupAdminTrunkGroupAccess->setName('groupAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess = null)
    {
        if (!$groupAdminSessionAdmissionControlAccess) return $this;
        $this->groupAdminSessionAdmissionControlAccess = ($groupAdminSessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $groupAdminSessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess);
        $this->groupAdminSessionAdmissionControlAccess->setName('groupAdminSessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminSessionAdmissionControlAccess
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess = null)
    {
        if (!$groupAdminOfficeZoneAccess) return $this;
        $this->groupAdminOfficeZoneAccess = ($groupAdminOfficeZoneAccess InstanceOf GroupAdminOfficeZoneAccess)
             ? $groupAdminOfficeZoneAccess
             : new GroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess);
        $this->groupAdminOfficeZoneAccess->setName('groupAdminOfficeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminOfficeZoneAccess
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return $this->groupAdminOfficeZoneAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess = null)
    {
        if (!$serviceProviderAdminProfileAccess) return $this;
        $this->serviceProviderAdminProfileAccess = ($serviceProviderAdminProfileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $serviceProviderAdminProfileAccess
             : new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
        $this->serviceProviderAdminProfileAccess->setName('serviceProviderAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return $this->serviceProviderAdminProfileAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess = null)
    {
        if (!$serviceProviderAdminGroupAccess) return $this;
        $this->serviceProviderAdminGroupAccess = ($serviceProviderAdminGroupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $serviceProviderAdminGroupAccess
             : new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
        $this->serviceProviderAdminGroupAccess->setName('serviceProviderAdminGroupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return $this->serviceProviderAdminGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess = null)
    {
        if (!$serviceProviderAdminUserAccess) return $this;
        $this->serviceProviderAdminUserAccess = ($serviceProviderAdminUserAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $serviceProviderAdminUserAccess
             : new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
        $this->serviceProviderAdminUserAccess->setName('serviceProviderAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess
     */
    public function getServiceProviderAdminUserAccess()
    {
        return $this->serviceProviderAdminUserAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess = null)
    {
        if (!$serviceProviderAdminAdminAccess) return $this;
        $this->serviceProviderAdminAdminAccess = ($serviceProviderAdminAdminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $serviceProviderAdminAdminAccess
             : new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
        $this->serviceProviderAdminAdminAccess->setName('serviceProviderAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return $this->serviceProviderAdminAdminAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess = null)
    {
        if (!$serviceProviderAdminDepartmentAccess) return $this;
        $this->serviceProviderAdminDepartmentAccess = ($serviceProviderAdminDepartmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $serviceProviderAdminDepartmentAccess
             : new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
        $this->serviceProviderAdminDepartmentAccess->setName('serviceProviderAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return $this->serviceProviderAdminDepartmentAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess = null)
    {
        if (!$serviceProviderAdminAccessDeviceAccess) return $this;
        $this->serviceProviderAdminAccessDeviceAccess = ($serviceProviderAdminAccessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $serviceProviderAdminAccessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
        $this->serviceProviderAdminAccessDeviceAccess->setName('serviceProviderAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return $this->serviceProviderAdminAccessDeviceAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess = null)
    {
        if (!$serviceProviderAdminPhoneNumberExtensionAccess) return $this;
        $this->serviceProviderAdminPhoneNumberExtensionAccess = ($serviceProviderAdminPhoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $serviceProviderAdminPhoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
        $this->serviceProviderAdminPhoneNumberExtensionAccess->setName('serviceProviderAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return $this->serviceProviderAdminPhoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess = null)
    {
        if (!$serviceProviderAdminCallingLineIdNumberAccess) return $this;
        $this->serviceProviderAdminCallingLineIdNumberAccess = ($serviceProviderAdminCallingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $serviceProviderAdminCallingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess);
        $this->serviceProviderAdminCallingLineIdNumberAccess->setName('serviceProviderAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCallingLineIdNumberAccess
     */
    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return $this->serviceProviderAdminCallingLineIdNumberAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess = null)
    {
        if (!$serviceProviderAdminServiceAccess) return $this;
        $this->serviceProviderAdminServiceAccess = ($serviceProviderAdminServiceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceProviderAdminServiceAccess
             : new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
        $this->serviceProviderAdminServiceAccess->setName('serviceProviderAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return $this->serviceProviderAdminServiceAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess = null)
    {
        if (!$serviceProviderAdminServicePackAccess) return $this;
        $this->serviceProviderAdminServicePackAccess = ($serviceProviderAdminServicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $serviceProviderAdminServicePackAccess
             : new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
        $this->serviceProviderAdminServicePackAccess->setName('serviceProviderAdminServicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return $this->serviceProviderAdminServicePackAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess = null)
    {
        if (!$serviceProviderAdminSessionAdmissionControlAccess) return $this;
        $this->serviceProviderAdminSessionAdmissionControlAccess = ($serviceProviderAdminSessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $serviceProviderAdminSessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess);
        $this->serviceProviderAdminSessionAdmissionControlAccess->setName('serviceProviderAdminSessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminSessionAdmissionControlAccess
     */
    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return $this->serviceProviderAdminSessionAdmissionControlAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess = null)
    {
        if (!$serviceProviderAdminWebBrandingAccess) return $this;
        $this->serviceProviderAdminWebBrandingAccess = ($serviceProviderAdminWebBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $serviceProviderAdminWebBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
        $this->serviceProviderAdminWebBrandingAccess->setName('serviceProviderAdminWebBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return $this->serviceProviderAdminWebBrandingAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess = null)
    {
        if (!$serviceProviderAdminOfficeZoneAccess) return $this;
        $this->serviceProviderAdminOfficeZoneAccess = ($serviceProviderAdminOfficeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $serviceProviderAdminOfficeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess);
        $this->serviceProviderAdminOfficeZoneAccess->setName('serviceProviderAdminOfficeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminOfficeZoneAccess
     */
    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return $this->serviceProviderAdminOfficeZoneAccess->getValue();
    }

    /**
     * 
     */
    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess = null)
    {
        if (!$enterpriseAdminNetworkPolicyAccess) return $this;
        $this->enterpriseAdminNetworkPolicyAccess = ($enterpriseAdminNetworkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $enterpriseAdminNetworkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
        $this->enterpriseAdminNetworkPolicyAccess->setName('enterpriseAdminNetworkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return $this->enterpriseAdminNetworkPolicyAccess->getValue();
    }
}
