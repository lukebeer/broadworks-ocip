<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderAdminGetPolicyRequest17sp1.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 *         The following elements are only used in HSS data mode:
 *           communicationBarringAccess
 */
class ServiceProviderAdminGetPolicyResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $profileAccess,
             $groupAccess,
             $userAccess,
             $adminAccess,
             $departmentAccess,
             $accessDeviceAccess,
             $phoneNumberExtensionAccess,
             $callingLineIdNumberAccess,
             $serviceAccess,
             $servicePackAccess,
             $sessionAdmissionControlAccess,
             $webBrandingAccess,
             $officeZoneAccess,
             $communicationBarringAccess,
             $networkPolicyAccess=null
    ) {
        $this->profileAccess                 = new ServiceProviderAdminProfileAccess($profileAccess);
        $this->groupAccess                   = new ServiceProviderAdminGroupAccess($groupAccess);
        $this->userAccess                    = new ServiceProviderAdminUserAccess($userAccess);
        $this->adminAccess                   = new ServiceProviderAdminAdminAccess($adminAccess);
        $this->departmentAccess              = new ServiceProviderAdminDepartmentAccess($departmentAccess);
        $this->accessDeviceAccess            = new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
        $this->phoneNumberExtensionAccess    = new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->callingLineIdNumberAccess     = new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
        $this->serviceAccess                 = new ServiceProviderAdminServiceAccess($serviceAccess);
        $this->servicePackAccess             = new ServiceProviderAdminServicePackAccess($servicePackAccess);
        $this->sessionAdmissionControlAccess = new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->webBrandingAccess             = new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
        $this->officeZoneAccess              = new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
        $this->communicationBarringAccess    = new ServiceProviderAdminCommunicationBarringAccess($communicationBarringAccess);
        $this->networkPolicyAccess           = new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
        $this->args                          = func_get_args();
    }

    public function setProfileAccess($profileAccess)
    {
        $profileAccess and $this->profileAccess = new ServiceProviderAdminProfileAccess($profileAccess);
    }

    public function getProfileAccess()
    {
        return (!$this->profileAccess) ?: $this->profileAccess->value();
    }

    public function setGroupAccess($groupAccess)
    {
        $groupAccess and $this->groupAccess = new ServiceProviderAdminGroupAccess($groupAccess);
    }

    public function getGroupAccess()
    {
        return (!$this->groupAccess) ?: $this->groupAccess->value();
    }

    public function setUserAccess($userAccess)
    {
        $userAccess and $this->userAccess = new ServiceProviderAdminUserAccess($userAccess);
    }

    public function getUserAccess()
    {
        return (!$this->userAccess) ?: $this->userAccess->value();
    }

    public function setAdminAccess($adminAccess)
    {
        $adminAccess and $this->adminAccess = new ServiceProviderAdminAdminAccess($adminAccess);
    }

    public function getAdminAccess()
    {
        return (!$this->adminAccess) ?: $this->adminAccess->value();
    }

    public function setDepartmentAccess($departmentAccess)
    {
        $departmentAccess and $this->departmentAccess = new ServiceProviderAdminDepartmentAccess($departmentAccess);
    }

    public function getDepartmentAccess()
    {
        return (!$this->departmentAccess) ?: $this->departmentAccess->value();
    }

    public function setAccessDeviceAccess($accessDeviceAccess)
    {
        $accessDeviceAccess and $this->accessDeviceAccess = new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
    }

    public function getAccessDeviceAccess()
    {
        return (!$this->accessDeviceAccess) ?: $this->accessDeviceAccess->value();
    }

    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess)
    {
        $phoneNumberExtensionAccess and $this->phoneNumberExtensionAccess = new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
    }

    public function getPhoneNumberExtensionAccess()
    {
        return (!$this->phoneNumberExtensionAccess) ?: $this->phoneNumberExtensionAccess->value();
    }

    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess)
    {
        $callingLineIdNumberAccess and $this->callingLineIdNumberAccess = new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
    }

    public function getCallingLineIdNumberAccess()
    {
        return (!$this->callingLineIdNumberAccess) ?: $this->callingLineIdNumberAccess->value();
    }

    public function setServiceAccess($serviceAccess)
    {
        $serviceAccess and $this->serviceAccess = new ServiceProviderAdminServiceAccess($serviceAccess);
    }

    public function getServiceAccess()
    {
        return (!$this->serviceAccess) ?: $this->serviceAccess->value();
    }

    public function setServicePackAccess($servicePackAccess)
    {
        $servicePackAccess and $this->servicePackAccess = new ServiceProviderAdminServicePackAccess($servicePackAccess);
    }

    public function getServicePackAccess()
    {
        return (!$this->servicePackAccess) ?: $this->servicePackAccess->value();
    }

    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess)
    {
        $sessionAdmissionControlAccess and $this->sessionAdmissionControlAccess = new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
    }

    public function getSessionAdmissionControlAccess()
    {
        return (!$this->sessionAdmissionControlAccess) ?: $this->sessionAdmissionControlAccess->value();
    }

    public function setWebBrandingAccess($webBrandingAccess)
    {
        $webBrandingAccess and $this->webBrandingAccess = new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
    }

    public function getWebBrandingAccess()
    {
        return (!$this->webBrandingAccess) ?: $this->webBrandingAccess->value();
    }

    public function setOfficeZoneAccess($officeZoneAccess)
    {
        $officeZoneAccess and $this->officeZoneAccess = new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
    }

    public function getOfficeZoneAccess()
    {
        return (!$this->officeZoneAccess) ?: $this->officeZoneAccess->value();
    }

    public function setCommunicationBarringAccess($communicationBarringAccess)
    {
        $communicationBarringAccess and $this->communicationBarringAccess = new ServiceProviderAdminCommunicationBarringAccess($communicationBarringAccess);
    }

    public function getCommunicationBarringAccess()
    {
        return (!$this->communicationBarringAccess) ?: $this->communicationBarringAccess->value();
    }

    public function setNetworkPolicyAccess($networkPolicyAccess)
    {
        $networkPolicyAccess and $this->networkPolicyAccess = new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
    }

    public function getNetworkPolicyAccess()
    {
        return (!$this->networkPolicyAccess) ?: $this->networkPolicyAccess->value();
    }
}
