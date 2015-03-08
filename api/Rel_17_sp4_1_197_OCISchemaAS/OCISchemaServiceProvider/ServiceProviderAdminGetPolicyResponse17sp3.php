<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderAdminGetPolicyRequest17sp3.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 *         The following elements are only used in HSS data mode:
 *             communicationBarringAccess
 */
class ServiceProviderAdminGetPolicyResponse17sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAdminGetPolicyResponse17sp3';
    public    $name                          = __CLASS__;
    protected $profileAccess                 = null;
    protected $groupAccess                   = null;
    protected $userAccess                    = null;
    protected $adminAccess                   = null;
    protected $departmentAccess              = null;
    protected $accessDeviceAccess            = null;
    protected $phoneNumberExtensionAccess    = null;
    protected $callingLineIdNumberAccess     = null;
    protected $serviceAccess                 = null;
    protected $servicePackAccess             = null;
    protected $sessionAdmissionControlAccess = null;
    protected $webBrandingAccess             = null;
    protected $officeZoneAccess              = null;
    protected $communicationBarringAccess    = null;
    protected $networkPolicyAccess           = null;
    protected $dialableCallerIDAccess        = null;


    /**
     * Service Provider Administrator's policy for accessing
     *         the service provider profile information.
     */
    public function setProfileAccess($profileAccess = null)
    {
        $this->profileAccess = ($profileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $profileAccess
             : new ServiceProviderAdminProfileAccess($profileAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the service provider profile information.
     */
    public function getProfileAccess()
    {
        return (!$this->profileAccess) ?: $this->profileAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing groups
     *         within the service provider.
     */
    public function setGroupAccess($groupAccess = null)
    {
        $this->groupAccess = ($groupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $groupAccess
             : new ServiceProviderAdminGroupAccess($groupAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing groups
     *         within the service provider.
     */
    public function getGroupAccess()
    {
        return (!$this->groupAccess) ?: $this->groupAccess->getValue();
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
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $userAccess
             : new ServiceProviderAdminUserAccess($userAccess);
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
    public function getUserAccess()
    {
        return (!$this->userAccess) ?: $this->userAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing other
     *         Service Provider Administrator's within the same service provider.
     */
    public function setAdminAccess($adminAccess = null)
    {
        $this->adminAccess = ($adminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $adminAccess
             : new ServiceProviderAdminAdminAccess($adminAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing other
     *         Service Provider Administrator's within the same service provider.
     */
    public function getAdminAccess()
    {
        return (!$this->adminAccess) ?: $this->adminAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing department lists
     *         within the service provider.
     */
    public function setDepartmentAccess($departmentAccess = null)
    {
        $this->departmentAccess = ($departmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $departmentAccess
             : new ServiceProviderAdminDepartmentAccess($departmentAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing department lists
     *         within the service provider.
     */
    public function getDepartmentAccess()
    {
        return (!$this->departmentAccess) ?: $this->departmentAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing access devices.
     */
    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing access devices.
     */
    public function getAccessDeviceAccess()
    {
        return (!$this->accessDeviceAccess) ?: $this->accessDeviceAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing phone numbers or
     *         extensions.
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing phone numbers or
     *         extensions.
     */
    public function getPhoneNumberExtensionAccess()
    {
        return (!$this->phoneNumberExtensionAccess) ?: $this->phoneNumberExtensionAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing calling line id number.
     */
    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess = null)
    {
        $this->callingLineIdNumberAccess = ($callingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $callingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing calling line id number.
     */
    public function getCallingLineIdNumberAccess()
    {
        return (!$this->callingLineIdNumberAccess) ?: $this->callingLineIdNumberAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing services.
     *         "No Authorization" was added in release 14.
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceAccess
             : new ServiceProviderAdminServiceAccess($serviceAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing services.
     *         "No Authorization" was added in release 14.
     */
    public function getServiceAccess()
    {
        return (!$this->serviceAccess) ?: $this->serviceAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing service packs.
     */
    public function setServicePackAccess($servicePackAccess = null)
    {
        $this->servicePackAccess = ($servicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $servicePackAccess
             : new ServiceProviderAdminServicePackAccess($servicePackAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing service packs.
     */
    public function getServicePackAccess()
    {
        return (!$this->servicePackAccess) ?: $this->servicePackAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the Session Admission Control information.
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the Session Admission Control information.
     */
    public function getSessionAdmissionControlAccess()
    {
        return (!$this->sessionAdmissionControlAccess) ?: $this->sessionAdmissionControlAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing web branding.
     */
    public function setWebBrandingAccess($webBrandingAccess = null)
    {
        $this->webBrandingAccess = ($webBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $webBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing web branding.
     */
    public function getWebBrandingAccess()
    {
        return (!$this->webBrandingAccess) ?: $this->webBrandingAccess->getValue();
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the Office Zone information.
     */
    public function setOfficeZoneAccess($officeZoneAccess = null)
    {
        $this->officeZoneAccess = ($officeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $officeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
    }

    /**
     * Service Provider Administrator's policy for accessing
     *         the Office Zone information.
     */
    public function getOfficeZoneAccess()
    {
        return (!$this->officeZoneAccess) ?: $this->officeZoneAccess->getValue();
    }

    /**
     * Service Providers Administrator's policy for accessing
     *         the Communication Barring information.
     */
    public function setCommunicationBarringAccess($communicationBarringAccess = null)
    {
        $this->communicationBarringAccess = ($communicationBarringAccess InstanceOf ServiceProviderAdminCommunicationBarringAccess)
             ? $communicationBarringAccess
             : new ServiceProviderAdminCommunicationBarringAccess($communicationBarringAccess);
    }

    /**
     * Service Providers Administrator's policy for accessing
     *         the Communication Barring information.
     */
    public function getCommunicationBarringAccess()
    {
        return (!$this->communicationBarringAccess) ?: $this->communicationBarringAccess->getValue();
    }

    /**
     * This data type is applicable only for an Enterprise administrator.
     *         It specifies the Enterprise Administrator's policy for accessing network policies (e.g. - VoiceVPN).
     */
    public function setNetworkPolicyAccess($networkPolicyAccess = null)
    {
        $this->networkPolicyAccess = ($networkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $networkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
    }

    /**
     * This data type is applicable only for an Enterprise administrator.
     *         It specifies the Enterprise Administrator's policy for accessing network policies (e.g. - VoiceVPN).
     */
    public function getNetworkPolicyAccess()
    {
        return (!$this->networkPolicyAccess) ?: $this->networkPolicyAccess->getValue();
    }

    /**
     * Policy for accessing the service provider Dialable Caller ID configuration.
     */
    public function setDialableCallerIDAccess($dialableCallerIDAccess = null)
    {
        $this->dialableCallerIDAccess = ($dialableCallerIDAccess InstanceOf ServiceProviderAdminDialableCallerIDAccess)
             ? $dialableCallerIDAccess
             : new ServiceProviderAdminDialableCallerIDAccess($dialableCallerIDAccess);
    }

    /**
     * Policy for accessing the service provider Dialable Caller ID configuration.
     */
    public function getDialableCallerIDAccess()
    {
        return (!$this->dialableCallerIDAccess) ?: $this->dialableCallerIDAccess->getValue();
    }
}
