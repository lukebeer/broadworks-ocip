<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceProviderAdminGetPolicyResponse14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAdminGetPolicyRequest14.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 */
class ServiceProviderAdminGetPolicyResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $profileAccess              = null;
    protected $groupAccess                = null;
    protected $userAccess                 = null;
    protected $adminAccess                = null;
    protected $departmentAccess           = null;
    protected $accessDeviceAccess         = null;
    protected $phoneNumberExtensionAccess = null;
    protected $serviceAccess              = null;
    protected $servicePackAccess          = null;
    protected $webBrandingAccess          = null;
    protected $networkPolicyAccess        = null;

    /**
     * @return ServiceProviderAdminGetPolicyResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
}
