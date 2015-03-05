<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDialableCallerIDAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemPolicyGetDefaultRequest17sp3.
 *         Contains the default policy settings for the system.
 *         The following elements are only used in AS data mode:
 *         		GroupAdminDialableCallerIDAccess
 *         		ServiceProviderAdminDialableCallerIDAccess
 *         The following elements are only used in HSS data mode:
 * 	      		serviceProviderAdminCommunicationBarringAccess
 */
class SystemPolicyGetDefaultResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupCallingPlanAccess,
             $groupExtensionAccess,
             $groupLDAPIntegrationAccess,
             $groupVoiceMessagingAccess,
             $groupDepartmentAdminUserAccess,
             $groupDepartmentAdminTrunkGroupAccess,
             $groupDepartmentAdminPhoneNumberExtensionAccess,
             $groupDepartmentAdminCallingLineIdNumberAccess,
             $groupUserAuthenticationAccess,
             $groupUserGroupDirectoryAccess,
             $groupUserProfileAccess,
             $groupUserEnhancedCallLogsAccess,
             $groupAdminProfileAccess,
             $groupAdminUserAccess,
             $groupAdminAdminAccess,
             $groupAdminDepartmentAccess,
             $groupAdminAccessDeviceAccess,
             $groupAdminEnhancedServiceInstanceAccess,
             $groupAdminFeatureAccessCodeAccess,
             $groupAdminPhoneNumberExtensionAccess,
             $groupAdminCallingLineIdNumberAccess,
             $groupAdminServiceAccess,
             $groupAdminTrunkGroupAccess,
             $groupAdminSessionAdmissionControlAccess,
             $groupAdminOfficeZoneAccess,
             $groupAdminDialableCallerIDAccess,
             $serviceProviderAdminProfileAccess,
             $serviceProviderAdminGroupAccess,
             $serviceProviderAdminUserAccess,
             $serviceProviderAdminAdminAccess,
             $serviceProviderAdminDepartmentAccess,
             $serviceProviderAdminAccessDeviceAccess,
             $serviceProviderAdminPhoneNumberExtensionAccess,
             $serviceProviderAdminCallingLineIdNumberAccess,
             $serviceProviderAdminServiceAccess,
             $serviceProviderAdminServicePackAccess,
             $serviceProviderAdminSessionAdmissionControlAccess,
             $serviceProviderAdminWebBrandingAccess,
             $serviceProviderAdminOfficeZoneAccess,
             $serviceProviderAdminCommunicationBarringAccess,
             $enterpriseAdminNetworkPolicyAccess,
             $serviceProviderAdminDialableCallerIDAccess
    ) {
        $this->groupCallingPlanAccess                            = new GroupCallingPlanAccess($groupCallingPlanAccess);
        $this->groupExtensionAccess                              = new GroupExtensionAccess($groupExtensionAccess);
        $this->groupLDAPIntegrationAccess                        = new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
        $this->groupVoiceMessagingAccess                         = new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
        $this->groupDepartmentAdminUserAccess                    = new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
        $this->groupDepartmentAdminTrunkGroupAccess              = new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
        $this->groupDepartmentAdminPhoneNumberExtensionAccess    = new GroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess);
        $this->groupDepartmentAdminCallingLineIdNumberAccess     = new GroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess);
        $this->groupUserAuthenticationAccess                     = new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
        $this->groupUserGroupDirectoryAccess                     = new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
        $this->groupUserProfileAccess                            = new GroupUserProfileAccess($groupUserProfileAccess);
        $this->groupUserEnhancedCallLogsAccess                   = new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
        $this->groupAdminProfileAccess                           = new GroupAdminProfileAccess($groupAdminProfileAccess);
        $this->groupAdminUserAccess                              = new GroupAdminUserAccess($groupAdminUserAccess);
        $this->groupAdminAdminAccess                             = new GroupAdminAdminAccess($groupAdminAdminAccess);
        $this->groupAdminDepartmentAccess                        = new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
        $this->groupAdminAccessDeviceAccess                      = new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
        $this->groupAdminEnhancedServiceInstanceAccess           = new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
        $this->groupAdminFeatureAccessCodeAccess                 = new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
        $this->groupAdminPhoneNumberExtensionAccess              = new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
        $this->groupAdminCallingLineIdNumberAccess               = new GroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess);
        $this->groupAdminServiceAccess                           = new GroupAdminServiceAccess($groupAdminServiceAccess);
        $this->groupAdminTrunkGroupAccess                        = new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
        $this->groupAdminSessionAdmissionControlAccess           = new GroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess);
        $this->groupAdminOfficeZoneAccess                        = new GroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess);
        $this->groupAdminDialableCallerIDAccess                  = new GroupAdminDialableCallerIDAccess($groupAdminDialableCallerIDAccess);
        $this->serviceProviderAdminProfileAccess                 = new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
        $this->serviceProviderAdminGroupAccess                   = new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
        $this->serviceProviderAdminUserAccess                    = new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
        $this->serviceProviderAdminAdminAccess                   = new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
        $this->serviceProviderAdminDepartmentAccess              = new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
        $this->serviceProviderAdminAccessDeviceAccess            = new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
        $this->serviceProviderAdminPhoneNumberExtensionAccess    = new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
        $this->serviceProviderAdminCallingLineIdNumberAccess     = new ServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess);
        $this->serviceProviderAdminServiceAccess                 = new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
        $this->serviceProviderAdminServicePackAccess             = new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
        $this->serviceProviderAdminSessionAdmissionControlAccess = new ServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess);
        $this->serviceProviderAdminWebBrandingAccess             = new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
        $this->serviceProviderAdminOfficeZoneAccess              = new ServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess);
        $this->serviceProviderAdminCommunicationBarringAccess    = new ServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess);
        $this->enterpriseAdminNetworkPolicyAccess                = new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
        $this->serviceProviderAdminDialableCallerIDAccess        = new ServiceProviderAdminDialableCallerIDAccess($serviceProviderAdminDialableCallerIDAccess);
        $this->args                                              = func_get_args();
    }

    public function setGroupCallingPlanAccess($groupCallingPlanAccess)
    {
        $groupCallingPlanAccess and $this->groupCallingPlanAccess = new GroupCallingPlanAccess($groupCallingPlanAccess);
    }

    public function getGroupCallingPlanAccess()
    {
        return (!$this->groupCallingPlanAccess) ?: $this->groupCallingPlanAccess->value();
    }

    public function setGroupExtensionAccess($groupExtensionAccess)
    {
        $groupExtensionAccess and $this->groupExtensionAccess = new GroupExtensionAccess($groupExtensionAccess);
    }

    public function getGroupExtensionAccess()
    {
        return (!$this->groupExtensionAccess) ?: $this->groupExtensionAccess->value();
    }

    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess)
    {
        $groupLDAPIntegrationAccess and $this->groupLDAPIntegrationAccess = new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
    }

    public function getGroupLDAPIntegrationAccess()
    {
        return (!$this->groupLDAPIntegrationAccess) ?: $this->groupLDAPIntegrationAccess->value();
    }

    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess)
    {
        $groupVoiceMessagingAccess and $this->groupVoiceMessagingAccess = new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
    }

    public function getGroupVoiceMessagingAccess()
    {
        return (!$this->groupVoiceMessagingAccess) ?: $this->groupVoiceMessagingAccess->value();
    }

    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess)
    {
        $groupDepartmentAdminUserAccess and $this->groupDepartmentAdminUserAccess = new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
    }

    public function getGroupDepartmentAdminUserAccess()
    {
        return (!$this->groupDepartmentAdminUserAccess) ?: $this->groupDepartmentAdminUserAccess->value();
    }

    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess)
    {
        $groupDepartmentAdminTrunkGroupAccess and $this->groupDepartmentAdminTrunkGroupAccess = new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
    }

    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return (!$this->groupDepartmentAdminTrunkGroupAccess) ?: $this->groupDepartmentAdminTrunkGroupAccess->value();
    }

    public function setGroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess)
    {
        $groupDepartmentAdminPhoneNumberExtensionAccess and $this->groupDepartmentAdminPhoneNumberExtensionAccess = new GroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess);
    }

    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return (!$this->groupDepartmentAdminPhoneNumberExtensionAccess) ?: $this->groupDepartmentAdminPhoneNumberExtensionAccess->value();
    }

    public function setGroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess)
    {
        $groupDepartmentAdminCallingLineIdNumberAccess and $this->groupDepartmentAdminCallingLineIdNumberAccess = new GroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess);
    }

    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return (!$this->groupDepartmentAdminCallingLineIdNumberAccess) ?: $this->groupDepartmentAdminCallingLineIdNumberAccess->value();
    }

    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess)
    {
        $groupUserAuthenticationAccess and $this->groupUserAuthenticationAccess = new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
    }

    public function getGroupUserAuthenticationAccess()
    {
        return (!$this->groupUserAuthenticationAccess) ?: $this->groupUserAuthenticationAccess->value();
    }

    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess)
    {
        $groupUserGroupDirectoryAccess and $this->groupUserGroupDirectoryAccess = new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
    }

    public function getGroupUserGroupDirectoryAccess()
    {
        return (!$this->groupUserGroupDirectoryAccess) ?: $this->groupUserGroupDirectoryAccess->value();
    }

    public function setGroupUserProfileAccess($groupUserProfileAccess)
    {
        $groupUserProfileAccess and $this->groupUserProfileAccess = new GroupUserProfileAccess($groupUserProfileAccess);
    }

    public function getGroupUserProfileAccess()
    {
        return (!$this->groupUserProfileAccess) ?: $this->groupUserProfileAccess->value();
    }

    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess)
    {
        $groupUserEnhancedCallLogsAccess and $this->groupUserEnhancedCallLogsAccess = new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
    }

    public function getGroupUserEnhancedCallLogsAccess()
    {
        return (!$this->groupUserEnhancedCallLogsAccess) ?: $this->groupUserEnhancedCallLogsAccess->value();
    }

    public function setGroupAdminProfileAccess($groupAdminProfileAccess)
    {
        $groupAdminProfileAccess and $this->groupAdminProfileAccess = new GroupAdminProfileAccess($groupAdminProfileAccess);
    }

    public function getGroupAdminProfileAccess()
    {
        return (!$this->groupAdminProfileAccess) ?: $this->groupAdminProfileAccess->value();
    }

    public function setGroupAdminUserAccess($groupAdminUserAccess)
    {
        $groupAdminUserAccess and $this->groupAdminUserAccess = new GroupAdminUserAccess($groupAdminUserAccess);
    }

    public function getGroupAdminUserAccess()
    {
        return (!$this->groupAdminUserAccess) ?: $this->groupAdminUserAccess->value();
    }

    public function setGroupAdminAdminAccess($groupAdminAdminAccess)
    {
        $groupAdminAdminAccess and $this->groupAdminAdminAccess = new GroupAdminAdminAccess($groupAdminAdminAccess);
    }

    public function getGroupAdminAdminAccess()
    {
        return (!$this->groupAdminAdminAccess) ?: $this->groupAdminAdminAccess->value();
    }

    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess)
    {
        $groupAdminDepartmentAccess and $this->groupAdminDepartmentAccess = new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
    }

    public function getGroupAdminDepartmentAccess()
    {
        return (!$this->groupAdminDepartmentAccess) ?: $this->groupAdminDepartmentAccess->value();
    }

    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess)
    {
        $groupAdminAccessDeviceAccess and $this->groupAdminAccessDeviceAccess = new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
    }

    public function getGroupAdminAccessDeviceAccess()
    {
        return (!$this->groupAdminAccessDeviceAccess) ?: $this->groupAdminAccessDeviceAccess->value();
    }

    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess)
    {
        $groupAdminEnhancedServiceInstanceAccess and $this->groupAdminEnhancedServiceInstanceAccess = new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
    }

    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return (!$this->groupAdminEnhancedServiceInstanceAccess) ?: $this->groupAdminEnhancedServiceInstanceAccess->value();
    }

    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess)
    {
        $groupAdminFeatureAccessCodeAccess and $this->groupAdminFeatureAccessCodeAccess = new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
    }

    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return (!$this->groupAdminFeatureAccessCodeAccess) ?: $this->groupAdminFeatureAccessCodeAccess->value();
    }

    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess)
    {
        $groupAdminPhoneNumberExtensionAccess and $this->groupAdminPhoneNumberExtensionAccess = new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
    }

    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return (!$this->groupAdminPhoneNumberExtensionAccess) ?: $this->groupAdminPhoneNumberExtensionAccess->value();
    }

    public function setGroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess)
    {
        $groupAdminCallingLineIdNumberAccess and $this->groupAdminCallingLineIdNumberAccess = new GroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess);
    }

    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return (!$this->groupAdminCallingLineIdNumberAccess) ?: $this->groupAdminCallingLineIdNumberAccess->value();
    }

    public function setGroupAdminServiceAccess($groupAdminServiceAccess)
    {
        $groupAdminServiceAccess and $this->groupAdminServiceAccess = new GroupAdminServiceAccess($groupAdminServiceAccess);
    }

    public function getGroupAdminServiceAccess()
    {
        return (!$this->groupAdminServiceAccess) ?: $this->groupAdminServiceAccess->value();
    }

    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess)
    {
        $groupAdminTrunkGroupAccess and $this->groupAdminTrunkGroupAccess = new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
    }

    public function getGroupAdminTrunkGroupAccess()
    {
        return (!$this->groupAdminTrunkGroupAccess) ?: $this->groupAdminTrunkGroupAccess->value();
    }

    public function setGroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess)
    {
        $groupAdminSessionAdmissionControlAccess and $this->groupAdminSessionAdmissionControlAccess = new GroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess);
    }

    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return (!$this->groupAdminSessionAdmissionControlAccess) ?: $this->groupAdminSessionAdmissionControlAccess->value();
    }

    public function setGroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess)
    {
        $groupAdminOfficeZoneAccess and $this->groupAdminOfficeZoneAccess = new GroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess);
    }

    public function getGroupAdminOfficeZoneAccess()
    {
        return (!$this->groupAdminOfficeZoneAccess) ?: $this->groupAdminOfficeZoneAccess->value();
    }

    public function setGroupAdminDialableCallerIDAccess($groupAdminDialableCallerIDAccess)
    {
        $groupAdminDialableCallerIDAccess and $this->groupAdminDialableCallerIDAccess = new GroupAdminDialableCallerIDAccess($groupAdminDialableCallerIDAccess);
    }

    public function getGroupAdminDialableCallerIDAccess()
    {
        return (!$this->groupAdminDialableCallerIDAccess) ?: $this->groupAdminDialableCallerIDAccess->value();
    }

    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess)
    {
        $serviceProviderAdminProfileAccess and $this->serviceProviderAdminProfileAccess = new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
    }

    public function getServiceProviderAdminProfileAccess()
    {
        return (!$this->serviceProviderAdminProfileAccess) ?: $this->serviceProviderAdminProfileAccess->value();
    }

    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess)
    {
        $serviceProviderAdminGroupAccess and $this->serviceProviderAdminGroupAccess = new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
    }

    public function getServiceProviderAdminGroupAccess()
    {
        return (!$this->serviceProviderAdminGroupAccess) ?: $this->serviceProviderAdminGroupAccess->value();
    }

    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess)
    {
        $serviceProviderAdminUserAccess and $this->serviceProviderAdminUserAccess = new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
    }

    public function getServiceProviderAdminUserAccess()
    {
        return (!$this->serviceProviderAdminUserAccess) ?: $this->serviceProviderAdminUserAccess->value();
    }

    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess)
    {
        $serviceProviderAdminAdminAccess and $this->serviceProviderAdminAdminAccess = new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
    }

    public function getServiceProviderAdminAdminAccess()
    {
        return (!$this->serviceProviderAdminAdminAccess) ?: $this->serviceProviderAdminAdminAccess->value();
    }

    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess)
    {
        $serviceProviderAdminDepartmentAccess and $this->serviceProviderAdminDepartmentAccess = new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
    }

    public function getServiceProviderAdminDepartmentAccess()
    {
        return (!$this->serviceProviderAdminDepartmentAccess) ?: $this->serviceProviderAdminDepartmentAccess->value();
    }

    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess)
    {
        $serviceProviderAdminAccessDeviceAccess and $this->serviceProviderAdminAccessDeviceAccess = new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
    }

    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return (!$this->serviceProviderAdminAccessDeviceAccess) ?: $this->serviceProviderAdminAccessDeviceAccess->value();
    }

    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess)
    {
        $serviceProviderAdminPhoneNumberExtensionAccess and $this->serviceProviderAdminPhoneNumberExtensionAccess = new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
    }

    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return (!$this->serviceProviderAdminPhoneNumberExtensionAccess) ?: $this->serviceProviderAdminPhoneNumberExtensionAccess->value();
    }

    public function setServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess)
    {
        $serviceProviderAdminCallingLineIdNumberAccess and $this->serviceProviderAdminCallingLineIdNumberAccess = new ServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess);
    }

    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return (!$this->serviceProviderAdminCallingLineIdNumberAccess) ?: $this->serviceProviderAdminCallingLineIdNumberAccess->value();
    }

    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess)
    {
        $serviceProviderAdminServiceAccess and $this->serviceProviderAdminServiceAccess = new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
    }

    public function getServiceProviderAdminServiceAccess()
    {
        return (!$this->serviceProviderAdminServiceAccess) ?: $this->serviceProviderAdminServiceAccess->value();
    }

    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess)
    {
        $serviceProviderAdminServicePackAccess and $this->serviceProviderAdminServicePackAccess = new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
    }

    public function getServiceProviderAdminServicePackAccess()
    {
        return (!$this->serviceProviderAdminServicePackAccess) ?: $this->serviceProviderAdminServicePackAccess->value();
    }

    public function setServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess)
    {
        $serviceProviderAdminSessionAdmissionControlAccess and $this->serviceProviderAdminSessionAdmissionControlAccess = new ServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess);
    }

    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return (!$this->serviceProviderAdminSessionAdmissionControlAccess) ?: $this->serviceProviderAdminSessionAdmissionControlAccess->value();
    }

    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess)
    {
        $serviceProviderAdminWebBrandingAccess and $this->serviceProviderAdminWebBrandingAccess = new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
    }

    public function getServiceProviderAdminWebBrandingAccess()
    {
        return (!$this->serviceProviderAdminWebBrandingAccess) ?: $this->serviceProviderAdminWebBrandingAccess->value();
    }

    public function setServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess)
    {
        $serviceProviderAdminOfficeZoneAccess and $this->serviceProviderAdminOfficeZoneAccess = new ServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess);
    }

    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return (!$this->serviceProviderAdminOfficeZoneAccess) ?: $this->serviceProviderAdminOfficeZoneAccess->value();
    }

    public function setServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess)
    {
        $serviceProviderAdminCommunicationBarringAccess and $this->serviceProviderAdminCommunicationBarringAccess = new ServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess);
    }

    public function getServiceProviderAdminCommunicationBarringAccess()
    {
        return (!$this->serviceProviderAdminCommunicationBarringAccess) ?: $this->serviceProviderAdminCommunicationBarringAccess->value();
    }

    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess)
    {
        $enterpriseAdminNetworkPolicyAccess and $this->enterpriseAdminNetworkPolicyAccess = new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
    }

    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return (!$this->enterpriseAdminNetworkPolicyAccess) ?: $this->enterpriseAdminNetworkPolicyAccess->value();
    }

    public function setServiceProviderAdminDialableCallerIDAccess($serviceProviderAdminDialableCallerIDAccess)
    {
        $serviceProviderAdminDialableCallerIDAccess and $this->serviceProviderAdminDialableCallerIDAccess = new ServiceProviderAdminDialableCallerIDAccess($serviceProviderAdminDialableCallerIDAccess);
    }

    public function getServiceProviderAdminDialableCallerIDAccess()
    {
        return (!$this->serviceProviderAdminDialableCallerIDAccess) ?: $this->serviceProviderAdminDialableCallerIDAccess->value();
    }
}
