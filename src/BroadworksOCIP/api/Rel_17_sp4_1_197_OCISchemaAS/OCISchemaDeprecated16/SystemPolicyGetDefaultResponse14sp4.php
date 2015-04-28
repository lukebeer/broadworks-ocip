<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemPolicyGetDefaultRequest14sp4.
 *         Contains the default policy settings for the system.
 */
class SystemPolicyGetDefaultResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPolicyGetDefaultResponse14sp4';
    protected $groupCallingPlanAccess;
    protected $groupExtensionAccess;
    protected $groupLDAPIntegrationAccess;
    protected $groupVoiceMessagingAccess;
    protected $groupDepartmentAdminUserAccess;
    protected $groupDepartmentAdminTrunkGroupAccess;
    protected $groupUserAuthenticationAccess;
    protected $groupUserGroupDirectoryAccess;
    protected $groupUserProfileAccess;
    protected $groupUserEnhancedCallLogsAccess;
    protected $groupAdminProfileAccess;
    protected $groupAdminUserAccess;
    protected $groupAdminAdminAccess;
    protected $groupAdminDepartmentAccess;
    protected $groupAdminAccessDeviceAccess;
    protected $groupAdminEnhancedServiceInstanceAccess;
    protected $groupAdminFeatureAccessCodeAccess;
    protected $groupAdminPhoneNumberExtensionAccess;
    protected $groupAdminServiceAccess;
    protected $groupAdminTrunkGroupAccess;
    protected $serviceProviderAdminProfileAccess;
    protected $serviceProviderAdminGroupAccess;
    protected $serviceProviderAdminUserAccess;
    protected $serviceProviderAdminAdminAccess;
    protected $serviceProviderAdminDepartmentAccess;
    protected $serviceProviderAdminAccessDeviceAccess;
    protected $serviceProviderAdminPhoneNumberExtensionAccess;
    protected $serviceProviderAdminServiceAccess;
    protected $serviceProviderAdminServicePackAccess;
    protected $serviceProviderAdminWebBrandingAccess;
    protected $enterpriseAdminNetworkPolicyAccess;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemPolicyGetDefaultResponse14sp4 $response
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
        $this->groupCallingPlanAccess = ($groupCallingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $groupCallingPlanAccess
             : new GroupCallingPlanAccess($groupCallingPlanAccess);
        $this->groupCallingPlanAccess->setElementName('groupCallingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess $groupCallingPlanAccess
     */
    public function getGroupCallingPlanAccess()
    {
        return ($this->groupCallingPlanAccess)
            ? $this->groupCallingPlanAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupExtensionAccess($groupExtensionAccess = null)
    {
        $this->groupExtensionAccess = ($groupExtensionAccess InstanceOf GroupExtensionAccess)
             ? $groupExtensionAccess
             : new GroupExtensionAccess($groupExtensionAccess);
        $this->groupExtensionAccess->setElementName('groupExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess $groupExtensionAccess
     */
    public function getGroupExtensionAccess()
    {
        return ($this->groupExtensionAccess)
            ? $this->groupExtensionAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess = null)
    {
        $this->groupLDAPIntegrationAccess = ($groupLDAPIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $groupLDAPIntegrationAccess
             : new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
        $this->groupLDAPIntegrationAccess->setElementName('groupLDAPIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess $groupLDAPIntegrationAccess
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return ($this->groupLDAPIntegrationAccess)
            ? $this->groupLDAPIntegrationAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess = null)
    {
        $this->groupVoiceMessagingAccess = ($groupVoiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $groupVoiceMessagingAccess
             : new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
        $this->groupVoiceMessagingAccess->setElementName('groupVoiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess $groupVoiceMessagingAccess
     */
    public function getGroupVoiceMessagingAccess()
    {
        return ($this->groupVoiceMessagingAccess)
            ? $this->groupVoiceMessagingAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess = null)
    {
        $this->groupDepartmentAdminUserAccess = ($groupDepartmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $groupDepartmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
        $this->groupDepartmentAdminUserAccess->setElementName('groupDepartmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess $groupDepartmentAdminUserAccess
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return ($this->groupDepartmentAdminUserAccess)
            ? $this->groupDepartmentAdminUserAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess = null)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = ($groupDepartmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $groupDepartmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
        $this->groupDepartmentAdminTrunkGroupAccess->setElementName('groupDepartmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess $groupDepartmentAdminTrunkGroupAccess
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return ($this->groupDepartmentAdminTrunkGroupAccess)
            ? $this->groupDepartmentAdminTrunkGroupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess = null)
    {
        $this->groupUserAuthenticationAccess = ($groupUserAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $groupUserAuthenticationAccess
             : new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
        $this->groupUserAuthenticationAccess->setElementName('groupUserAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess $groupUserAuthenticationAccess
     */
    public function getGroupUserAuthenticationAccess()
    {
        return ($this->groupUserAuthenticationAccess)
            ? $this->groupUserAuthenticationAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess = null)
    {
        $this->groupUserGroupDirectoryAccess = ($groupUserGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $groupUserGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
        $this->groupUserGroupDirectoryAccess->setElementName('groupUserGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess $groupUserGroupDirectoryAccess
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return ($this->groupUserGroupDirectoryAccess)
            ? $this->groupUserGroupDirectoryAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserProfileAccess($groupUserProfileAccess = null)
    {
        $this->groupUserProfileAccess = ($groupUserProfileAccess InstanceOf GroupUserProfileAccess)
             ? $groupUserProfileAccess
             : new GroupUserProfileAccess($groupUserProfileAccess);
        $this->groupUserProfileAccess->setElementName('groupUserProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess $groupUserProfileAccess
     */
    public function getGroupUserProfileAccess()
    {
        return ($this->groupUserProfileAccess)
            ? $this->groupUserProfileAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess = null)
    {
        $this->groupUserEnhancedCallLogsAccess = ($groupUserEnhancedCallLogsAccess InstanceOf GroupUserCallLogAccess)
             ? $groupUserEnhancedCallLogsAccess
             : new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
        $this->groupUserEnhancedCallLogsAccess->setElementName('groupUserEnhancedCallLogsAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserCallLogAccess $groupUserEnhancedCallLogsAccess
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return ($this->groupUserEnhancedCallLogsAccess)
            ? $this->groupUserEnhancedCallLogsAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminProfileAccess($groupAdminProfileAccess = null)
    {
        $this->groupAdminProfileAccess = ($groupAdminProfileAccess InstanceOf GroupAdminProfileAccess)
             ? $groupAdminProfileAccess
             : new GroupAdminProfileAccess($groupAdminProfileAccess);
        $this->groupAdminProfileAccess->setElementName('groupAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess $groupAdminProfileAccess
     */
    public function getGroupAdminProfileAccess()
    {
        return ($this->groupAdminProfileAccess)
            ? $this->groupAdminProfileAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminUserAccess($groupAdminUserAccess = null)
    {
        $this->groupAdminUserAccess = ($groupAdminUserAccess InstanceOf GroupAdminUserAccess)
             ? $groupAdminUserAccess
             : new GroupAdminUserAccess($groupAdminUserAccess);
        $this->groupAdminUserAccess->setElementName('groupAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess $groupAdminUserAccess
     */
    public function getGroupAdminUserAccess()
    {
        return ($this->groupAdminUserAccess)
            ? $this->groupAdminUserAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminAdminAccess($groupAdminAdminAccess = null)
    {
        $this->groupAdminAdminAccess = ($groupAdminAdminAccess InstanceOf GroupAdminAdminAccess)
             ? $groupAdminAdminAccess
             : new GroupAdminAdminAccess($groupAdminAdminAccess);
        $this->groupAdminAdminAccess->setElementName('groupAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess $groupAdminAdminAccess
     */
    public function getGroupAdminAdminAccess()
    {
        return ($this->groupAdminAdminAccess)
            ? $this->groupAdminAdminAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess = null)
    {
        $this->groupAdminDepartmentAccess = ($groupAdminDepartmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $groupAdminDepartmentAccess
             : new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
        $this->groupAdminDepartmentAccess->setElementName('groupAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess $groupAdminDepartmentAccess
     */
    public function getGroupAdminDepartmentAccess()
    {
        return ($this->groupAdminDepartmentAccess)
            ? $this->groupAdminDepartmentAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess = null)
    {
        $this->groupAdminAccessDeviceAccess = ($groupAdminAccessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $groupAdminAccessDeviceAccess
             : new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
        $this->groupAdminAccessDeviceAccess->setElementName('groupAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess $groupAdminAccessDeviceAccess
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return ($this->groupAdminAccessDeviceAccess)
            ? $this->groupAdminAccessDeviceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess = null)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = ($groupAdminEnhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $groupAdminEnhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
        $this->groupAdminEnhancedServiceInstanceAccess->setElementName('groupAdminEnhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess $groupAdminEnhancedServiceInstanceAccess
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return ($this->groupAdminEnhancedServiceInstanceAccess)
            ? $this->groupAdminEnhancedServiceInstanceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess = null)
    {
        $this->groupAdminFeatureAccessCodeAccess = ($groupAdminFeatureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $groupAdminFeatureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
        $this->groupAdminFeatureAccessCodeAccess->setElementName('groupAdminFeatureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess $groupAdminFeatureAccessCodeAccess
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return ($this->groupAdminFeatureAccessCodeAccess)
            ? $this->groupAdminFeatureAccessCodeAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupAdminPhoneNumberExtensionAccess = ($groupAdminPhoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $groupAdminPhoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
        $this->groupAdminPhoneNumberExtensionAccess->setElementName('groupAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess $groupAdminPhoneNumberExtensionAccess
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return ($this->groupAdminPhoneNumberExtensionAccess)
            ? $this->groupAdminPhoneNumberExtensionAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminServiceAccess($groupAdminServiceAccess = null)
    {
        $this->groupAdminServiceAccess = ($groupAdminServiceAccess InstanceOf GroupAdminServiceAccess)
             ? $groupAdminServiceAccess
             : new GroupAdminServiceAccess($groupAdminServiceAccess);
        $this->groupAdminServiceAccess->setElementName('groupAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess $groupAdminServiceAccess
     */
    public function getGroupAdminServiceAccess()
    {
        return ($this->groupAdminServiceAccess)
            ? $this->groupAdminServiceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess = null)
    {
        $this->groupAdminTrunkGroupAccess = ($groupAdminTrunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $groupAdminTrunkGroupAccess
             : new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
        $this->groupAdminTrunkGroupAccess->setElementName('groupAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess $groupAdminTrunkGroupAccess
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return ($this->groupAdminTrunkGroupAccess)
            ? $this->groupAdminTrunkGroupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess = null)
    {
        $this->serviceProviderAdminProfileAccess = ($serviceProviderAdminProfileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $serviceProviderAdminProfileAccess
             : new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
        $this->serviceProviderAdminProfileAccess->setElementName('serviceProviderAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess $serviceProviderAdminProfileAccess
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return ($this->serviceProviderAdminProfileAccess)
            ? $this->serviceProviderAdminProfileAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess = null)
    {
        $this->serviceProviderAdminGroupAccess = ($serviceProviderAdminGroupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $serviceProviderAdminGroupAccess
             : new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
        $this->serviceProviderAdminGroupAccess->setElementName('serviceProviderAdminGroupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess $serviceProviderAdminGroupAccess
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return ($this->serviceProviderAdminGroupAccess)
            ? $this->serviceProviderAdminGroupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess = null)
    {
        $this->serviceProviderAdminUserAccess = ($serviceProviderAdminUserAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $serviceProviderAdminUserAccess
             : new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
        $this->serviceProviderAdminUserAccess->setElementName('serviceProviderAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess $serviceProviderAdminUserAccess
     */
    public function getServiceProviderAdminUserAccess()
    {
        return ($this->serviceProviderAdminUserAccess)
            ? $this->serviceProviderAdminUserAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess = null)
    {
        $this->serviceProviderAdminAdminAccess = ($serviceProviderAdminAdminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $serviceProviderAdminAdminAccess
             : new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
        $this->serviceProviderAdminAdminAccess->setElementName('serviceProviderAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess $serviceProviderAdminAdminAccess
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return ($this->serviceProviderAdminAdminAccess)
            ? $this->serviceProviderAdminAdminAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess = null)
    {
        $this->serviceProviderAdminDepartmentAccess = ($serviceProviderAdminDepartmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $serviceProviderAdminDepartmentAccess
             : new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
        $this->serviceProviderAdminDepartmentAccess->setElementName('serviceProviderAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess $serviceProviderAdminDepartmentAccess
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return ($this->serviceProviderAdminDepartmentAccess)
            ? $this->serviceProviderAdminDepartmentAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess = null)
    {
        $this->serviceProviderAdminAccessDeviceAccess = ($serviceProviderAdminAccessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $serviceProviderAdminAccessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
        $this->serviceProviderAdminAccessDeviceAccess->setElementName('serviceProviderAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess $serviceProviderAdminAccessDeviceAccess
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return ($this->serviceProviderAdminAccessDeviceAccess)
            ? $this->serviceProviderAdminAccessDeviceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess = null)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = ($serviceProviderAdminPhoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $serviceProviderAdminPhoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
        $this->serviceProviderAdminPhoneNumberExtensionAccess->setElementName('serviceProviderAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess $serviceProviderAdminPhoneNumberExtensionAccess
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return ($this->serviceProviderAdminPhoneNumberExtensionAccess)
            ? $this->serviceProviderAdminPhoneNumberExtensionAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess = null)
    {
        $this->serviceProviderAdminServiceAccess = ($serviceProviderAdminServiceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceProviderAdminServiceAccess
             : new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
        $this->serviceProviderAdminServiceAccess->setElementName('serviceProviderAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess $serviceProviderAdminServiceAccess
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return ($this->serviceProviderAdminServiceAccess)
            ? $this->serviceProviderAdminServiceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess = null)
    {
        $this->serviceProviderAdminServicePackAccess = ($serviceProviderAdminServicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $serviceProviderAdminServicePackAccess
             : new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
        $this->serviceProviderAdminServicePackAccess->setElementName('serviceProviderAdminServicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess $serviceProviderAdminServicePackAccess
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return ($this->serviceProviderAdminServicePackAccess)
            ? $this->serviceProviderAdminServicePackAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess = null)
    {
        $this->serviceProviderAdminWebBrandingAccess = ($serviceProviderAdminWebBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $serviceProviderAdminWebBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
        $this->serviceProviderAdminWebBrandingAccess->setElementName('serviceProviderAdminWebBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess $serviceProviderAdminWebBrandingAccess
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return ($this->serviceProviderAdminWebBrandingAccess)
            ? $this->serviceProviderAdminWebBrandingAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess = null)
    {
        $this->enterpriseAdminNetworkPolicyAccess = ($enterpriseAdminNetworkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $enterpriseAdminNetworkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
        $this->enterpriseAdminNetworkPolicyAccess->setElementName('enterpriseAdminNetworkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess $enterpriseAdminNetworkPolicyAccess
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return ($this->enterpriseAdminNetworkPolicyAccess)
            ? $this->enterpriseAdminNetworkPolicyAccess->getElementValue()
            : null;
    }
}
