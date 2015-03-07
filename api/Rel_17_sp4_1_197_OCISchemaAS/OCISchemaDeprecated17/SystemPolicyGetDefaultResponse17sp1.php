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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemPolicyGetDefaultRequest17sp1.
 *         Contains the default policy settings for the system.
 *         The following elements are only used in HSS data mode:
 * 	   serviceProviderAdminCommunicationBarringAccess
 */
class SystemPolicyGetDefaultResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                               = __CLASS__;
    protected $groupCallingPlanAccess                             = null;
    protected $groupExtensionAccess                               = null;
    protected $groupLDAPIntegrationAccess                         = null;
    protected $groupVoiceMessagingAccess                          = null;
    protected $groupDepartmentAdminUserAccess                     = null;
    protected $groupDepartmentAdminTrunkGroupAccess               = null;
    protected $groupDepartmentAdminPhoneNumberExtensionAccess     = null;
    protected $groupDepartmentAdminCallingLineIdNumberAccess      = null;
    protected $groupUserAuthenticationAccess                      = null;
    protected $groupUserGroupDirectoryAccess                      = null;
    protected $groupUserProfileAccess                             = null;
    protected $groupUserEnhancedCallLogsAccess                    = null;
    protected $groupAdminProfileAccess                            = null;
    protected $groupAdminUserAccess                               = null;
    protected $groupAdminAdminAccess                              = null;
    protected $groupAdminDepartmentAccess                         = null;
    protected $groupAdminAccessDeviceAccess                       = null;
    protected $groupAdminEnhancedServiceInstanceAccess            = null;
    protected $groupAdminFeatureAccessCodeAccess                  = null;
    protected $groupAdminPhoneNumberExtensionAccess               = null;
    protected $groupAdminCallingLineIdNumberAccess                = null;
    protected $groupAdminServiceAccess                            = null;
    protected $groupAdminTrunkGroupAccess                         = null;
    protected $groupAdminSessionAdmissionControlAccess            = null;
    protected $groupAdminOfficeZoneAccess                         = null;
    protected $serviceProviderAdminProfileAccess                  = null;
    protected $serviceProviderAdminGroupAccess                    = null;
    protected $serviceProviderAdminUserAccess                     = null;
    protected $serviceProviderAdminAdminAccess                    = null;
    protected $serviceProviderAdminDepartmentAccess               = null;
    protected $serviceProviderAdminAccessDeviceAccess             = null;
    protected $serviceProviderAdminPhoneNumberExtensionAccess     = null;
    protected $serviceProviderAdminCallingLineIdNumberAccess      = null;
    protected $serviceProviderAdminServiceAccess                  = null;
    protected $serviceProviderAdminServicePackAccess              = null;
    protected $serviceProviderAdminSessionAdmissionControlAccess  = null;
    protected $serviceProviderAdminWebBrandingAccess              = null;
    protected $serviceProviderAdminOfficeZoneAccess               = null;
    protected $serviceProviderAdminCommunicationBarringAccess     = null;
    protected $enterpriseAdminNetworkPolicyAccess                 = null;


    public function setGroupCallingPlanAccess($groupCallingPlanAccess = null)
    {
        $this->groupCallingPlanAccess = ($groupCallingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $groupCallingPlanAccess
             : new GroupCallingPlanAccess($groupCallingPlanAccess);
    }

    public function getGroupCallingPlanAccess()
    {
        return (!$this->groupCallingPlanAccess) ?: $this->groupCallingPlanAccess->value();
    }

    public function setGroupExtensionAccess($groupExtensionAccess = null)
    {
        $this->groupExtensionAccess = ($groupExtensionAccess InstanceOf GroupExtensionAccess)
             ? $groupExtensionAccess
             : new GroupExtensionAccess($groupExtensionAccess);
    }

    public function getGroupExtensionAccess()
    {
        return (!$this->groupExtensionAccess) ?: $this->groupExtensionAccess->value();
    }

    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess = null)
    {
        $this->groupLDAPIntegrationAccess = ($groupLDAPIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $groupLDAPIntegrationAccess
             : new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
    }

    public function getGroupLDAPIntegrationAccess()
    {
        return (!$this->groupLDAPIntegrationAccess) ?: $this->groupLDAPIntegrationAccess->value();
    }

    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess = null)
    {
        $this->groupVoiceMessagingAccess = ($groupVoiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $groupVoiceMessagingAccess
             : new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
    }

    public function getGroupVoiceMessagingAccess()
    {
        return (!$this->groupVoiceMessagingAccess) ?: $this->groupVoiceMessagingAccess->value();
    }

    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess = null)
    {
        $this->groupDepartmentAdminUserAccess = ($groupDepartmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $groupDepartmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
    }

    public function getGroupDepartmentAdminUserAccess()
    {
        return (!$this->groupDepartmentAdminUserAccess) ?: $this->groupDepartmentAdminUserAccess->value();
    }

    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess = null)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = ($groupDepartmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $groupDepartmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
    }

    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->groupDepartmentAdminTrunkGroupAccess) ?: $this->groupDepartmentAdminTrunkGroupAccess->value();
    }

    public function setGroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = ($groupDepartmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $groupDepartmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess);
    }

    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return (!$this->groupDepartmentAdminPhoneNumberExtensionAccess) ?: $this->groupDepartmentAdminPhoneNumberExtensionAccess->value();
    }

    public function setGroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess = null)
    {
        $this->groupDepartmentAdminCallingLineIdNumberAccess = ($groupDepartmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $groupDepartmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess);
    }

    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return (!$this->groupDepartmentAdminCallingLineIdNumberAccess) ?: $this->groupDepartmentAdminCallingLineIdNumberAccess->value();
    }

    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess = null)
    {
        $this->groupUserAuthenticationAccess = ($groupUserAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $groupUserAuthenticationAccess
             : new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
    }

    public function getGroupUserAuthenticationAccess()
    {
        return (!$this->groupUserAuthenticationAccess) ?: $this->groupUserAuthenticationAccess->value();
    }

    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess = null)
    {
        $this->groupUserGroupDirectoryAccess = ($groupUserGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $groupUserGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
    }

    public function getGroupUserGroupDirectoryAccess()
    {
        return (!$this->groupUserGroupDirectoryAccess) ?: $this->groupUserGroupDirectoryAccess->value();
    }

    public function setGroupUserProfileAccess($groupUserProfileAccess = null)
    {
        $this->groupUserProfileAccess = ($groupUserProfileAccess InstanceOf GroupUserProfileAccess)
             ? $groupUserProfileAccess
             : new GroupUserProfileAccess($groupUserProfileAccess);
    }

    public function getGroupUserProfileAccess()
    {
        return (!$this->groupUserProfileAccess) ?: $this->groupUserProfileAccess->value();
    }

    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess = null)
    {
        $this->groupUserEnhancedCallLogsAccess = ($groupUserEnhancedCallLogsAccess InstanceOf GroupUserCallLogAccess)
             ? $groupUserEnhancedCallLogsAccess
             : new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
    }

    public function getGroupUserEnhancedCallLogsAccess()
    {
        return (!$this->groupUserEnhancedCallLogsAccess) ?: $this->groupUserEnhancedCallLogsAccess->value();
    }

    public function setGroupAdminProfileAccess($groupAdminProfileAccess = null)
    {
        $this->groupAdminProfileAccess = ($groupAdminProfileAccess InstanceOf GroupAdminProfileAccess)
             ? $groupAdminProfileAccess
             : new GroupAdminProfileAccess($groupAdminProfileAccess);
    }

    public function getGroupAdminProfileAccess()
    {
        return (!$this->groupAdminProfileAccess) ?: $this->groupAdminProfileAccess->value();
    }

    public function setGroupAdminUserAccess($groupAdminUserAccess = null)
    {
        $this->groupAdminUserAccess = ($groupAdminUserAccess InstanceOf GroupAdminUserAccess)
             ? $groupAdminUserAccess
             : new GroupAdminUserAccess($groupAdminUserAccess);
    }

    public function getGroupAdminUserAccess()
    {
        return (!$this->groupAdminUserAccess) ?: $this->groupAdminUserAccess->value();
    }

    public function setGroupAdminAdminAccess($groupAdminAdminAccess = null)
    {
        $this->groupAdminAdminAccess = ($groupAdminAdminAccess InstanceOf GroupAdminAdminAccess)
             ? $groupAdminAdminAccess
             : new GroupAdminAdminAccess($groupAdminAdminAccess);
    }

    public function getGroupAdminAdminAccess()
    {
        return (!$this->groupAdminAdminAccess) ?: $this->groupAdminAdminAccess->value();
    }

    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess = null)
    {
        $this->groupAdminDepartmentAccess = ($groupAdminDepartmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $groupAdminDepartmentAccess
             : new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
    }

    public function getGroupAdminDepartmentAccess()
    {
        return (!$this->groupAdminDepartmentAccess) ?: $this->groupAdminDepartmentAccess->value();
    }

    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess = null)
    {
        $this->groupAdminAccessDeviceAccess = ($groupAdminAccessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $groupAdminAccessDeviceAccess
             : new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
    }

    public function getGroupAdminAccessDeviceAccess()
    {
        return (!$this->groupAdminAccessDeviceAccess) ?: $this->groupAdminAccessDeviceAccess->value();
    }

    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess = null)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = ($groupAdminEnhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $groupAdminEnhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
    }

    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return (!$this->groupAdminEnhancedServiceInstanceAccess) ?: $this->groupAdminEnhancedServiceInstanceAccess->value();
    }

    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess = null)
    {
        $this->groupAdminFeatureAccessCodeAccess = ($groupAdminFeatureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $groupAdminFeatureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
    }

    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return (!$this->groupAdminFeatureAccessCodeAccess) ?: $this->groupAdminFeatureAccessCodeAccess->value();
    }

    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupAdminPhoneNumberExtensionAccess = ($groupAdminPhoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $groupAdminPhoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
    }

    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return (!$this->groupAdminPhoneNumberExtensionAccess) ?: $this->groupAdminPhoneNumberExtensionAccess->value();
    }

    public function setGroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess = null)
    {
        $this->groupAdminCallingLineIdNumberAccess = ($groupAdminCallingLineIdNumberAccess InstanceOf GroupAdminCallingLineIdNumberAccess)
             ? $groupAdminCallingLineIdNumberAccess
             : new GroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess);
    }

    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return (!$this->groupAdminCallingLineIdNumberAccess) ?: $this->groupAdminCallingLineIdNumberAccess->value();
    }

    public function setGroupAdminServiceAccess($groupAdminServiceAccess = null)
    {
        $this->groupAdminServiceAccess = ($groupAdminServiceAccess InstanceOf GroupAdminServiceAccess)
             ? $groupAdminServiceAccess
             : new GroupAdminServiceAccess($groupAdminServiceAccess);
    }

    public function getGroupAdminServiceAccess()
    {
        return (!$this->groupAdminServiceAccess) ?: $this->groupAdminServiceAccess->value();
    }

    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess = null)
    {
        $this->groupAdminTrunkGroupAccess = ($groupAdminTrunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $groupAdminTrunkGroupAccess
             : new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
    }

    public function getGroupAdminTrunkGroupAccess()
    {
        return (!$this->groupAdminTrunkGroupAccess) ?: $this->groupAdminTrunkGroupAccess->value();
    }

    public function setGroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess = null)
    {
        $this->groupAdminSessionAdmissionControlAccess = ($groupAdminSessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $groupAdminSessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess);
    }

    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return (!$this->groupAdminSessionAdmissionControlAccess) ?: $this->groupAdminSessionAdmissionControlAccess->value();
    }

    public function setGroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess = null)
    {
        $this->groupAdminOfficeZoneAccess = ($groupAdminOfficeZoneAccess InstanceOf GroupAdminOfficeZoneAccess)
             ? $groupAdminOfficeZoneAccess
             : new GroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess);
    }

    public function getGroupAdminOfficeZoneAccess()
    {
        return (!$this->groupAdminOfficeZoneAccess) ?: $this->groupAdminOfficeZoneAccess->value();
    }

    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess = null)
    {
        $this->serviceProviderAdminProfileAccess = ($serviceProviderAdminProfileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $serviceProviderAdminProfileAccess
             : new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
    }

    public function getServiceProviderAdminProfileAccess()
    {
        return (!$this->serviceProviderAdminProfileAccess) ?: $this->serviceProviderAdminProfileAccess->value();
    }

    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess = null)
    {
        $this->serviceProviderAdminGroupAccess = ($serviceProviderAdminGroupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $serviceProviderAdminGroupAccess
             : new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
    }

    public function getServiceProviderAdminGroupAccess()
    {
        return (!$this->serviceProviderAdminGroupAccess) ?: $this->serviceProviderAdminGroupAccess->value();
    }

    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess = null)
    {
        $this->serviceProviderAdminUserAccess = ($serviceProviderAdminUserAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $serviceProviderAdminUserAccess
             : new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
    }

    public function getServiceProviderAdminUserAccess()
    {
        return (!$this->serviceProviderAdminUserAccess) ?: $this->serviceProviderAdminUserAccess->value();
    }

    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess = null)
    {
        $this->serviceProviderAdminAdminAccess = ($serviceProviderAdminAdminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $serviceProviderAdminAdminAccess
             : new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
    }

    public function getServiceProviderAdminAdminAccess()
    {
        return (!$this->serviceProviderAdminAdminAccess) ?: $this->serviceProviderAdminAdminAccess->value();
    }

    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess = null)
    {
        $this->serviceProviderAdminDepartmentAccess = ($serviceProviderAdminDepartmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $serviceProviderAdminDepartmentAccess
             : new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
    }

    public function getServiceProviderAdminDepartmentAccess()
    {
        return (!$this->serviceProviderAdminDepartmentAccess) ?: $this->serviceProviderAdminDepartmentAccess->value();
    }

    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess = null)
    {
        $this->serviceProviderAdminAccessDeviceAccess = ($serviceProviderAdminAccessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $serviceProviderAdminAccessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
    }

    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return (!$this->serviceProviderAdminAccessDeviceAccess) ?: $this->serviceProviderAdminAccessDeviceAccess->value();
    }

    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess = null)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = ($serviceProviderAdminPhoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $serviceProviderAdminPhoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
    }

    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return (!$this->serviceProviderAdminPhoneNumberExtensionAccess) ?: $this->serviceProviderAdminPhoneNumberExtensionAccess->value();
    }

    public function setServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess = null)
    {
        $this->serviceProviderAdminCallingLineIdNumberAccess = ($serviceProviderAdminCallingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $serviceProviderAdminCallingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess);
    }

    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return (!$this->serviceProviderAdminCallingLineIdNumberAccess) ?: $this->serviceProviderAdminCallingLineIdNumberAccess->value();
    }

    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess = null)
    {
        $this->serviceProviderAdminServiceAccess = ($serviceProviderAdminServiceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceProviderAdminServiceAccess
             : new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
    }

    public function getServiceProviderAdminServiceAccess()
    {
        return (!$this->serviceProviderAdminServiceAccess) ?: $this->serviceProviderAdminServiceAccess->value();
    }

    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess = null)
    {
        $this->serviceProviderAdminServicePackAccess = ($serviceProviderAdminServicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $serviceProviderAdminServicePackAccess
             : new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
    }

    public function getServiceProviderAdminServicePackAccess()
    {
        return (!$this->serviceProviderAdminServicePackAccess) ?: $this->serviceProviderAdminServicePackAccess->value();
    }

    public function setServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess = null)
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = ($serviceProviderAdminSessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $serviceProviderAdminSessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess);
    }

    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return (!$this->serviceProviderAdminSessionAdmissionControlAccess) ?: $this->serviceProviderAdminSessionAdmissionControlAccess->value();
    }

    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess = null)
    {
        $this->serviceProviderAdminWebBrandingAccess = ($serviceProviderAdminWebBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $serviceProviderAdminWebBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
    }

    public function getServiceProviderAdminWebBrandingAccess()
    {
        return (!$this->serviceProviderAdminWebBrandingAccess) ?: $this->serviceProviderAdminWebBrandingAccess->value();
    }

    public function setServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess = null)
    {
        $this->serviceProviderAdminOfficeZoneAccess = ($serviceProviderAdminOfficeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $serviceProviderAdminOfficeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess);
    }

    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return (!$this->serviceProviderAdminOfficeZoneAccess) ?: $this->serviceProviderAdminOfficeZoneAccess->value();
    }

    public function setServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess = null)
    {
        $this->serviceProviderAdminCommunicationBarringAccess = ($serviceProviderAdminCommunicationBarringAccess InstanceOf ServiceProviderAdminCommunicationBarringAccess)
             ? $serviceProviderAdminCommunicationBarringAccess
             : new ServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess);
    }

    public function getServiceProviderAdminCommunicationBarringAccess()
    {
        return (!$this->serviceProviderAdminCommunicationBarringAccess) ?: $this->serviceProviderAdminCommunicationBarringAccess->value();
    }

    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess = null)
    {
        $this->enterpriseAdminNetworkPolicyAccess = ($enterpriseAdminNetworkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $enterpriseAdminNetworkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
    }

    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return (!$this->enterpriseAdminNetworkPolicyAccess) ?: $this->enterpriseAdminNetworkPolicyAccess->value();
    }
}
